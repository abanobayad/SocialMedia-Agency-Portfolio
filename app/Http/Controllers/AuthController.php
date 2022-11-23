<?php

namespace App\Http\Controllers;

use App\Mail\ForgotMail;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function regView()
    {
        return view('Dashboard.Auth.signup');
    }
    public function register(Request $request)
    {
        // $data = $request->validate(['name'=> 'required','email'=> 'required','password'=> 'required|integer','c_password'=> 'required|integer',]);

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            toast('top-right')->showCloseButton();
            Alert::error('Edit Failed', $validator->errors()->all());
            return back()->withErrors($validator->errors())->withInput();
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['image'] = 'user.jpg';
        // dd($input);
        try {
            $user = User::create($input);
        } catch (\Throwable $th) {
            // throw $th;
            dd($th);
        }

        toast('Creation Done', 'success',  'top-right')->showCloseButton();
        Alert::success('Account Created Successfully');
        return redirect(route('dash.home'))->with($success = 'Account Created Successfully');
    }

    public function login()
    {
        return view('Dashboard.Auth.signin');
    }

    public function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'email' => 'required|email|max:191|exists:users,email',
            'password' => 'required|string'
        ]);

        if($validator->fails())
        {
            toast('top-right')->showCloseButton();
            Alert::error('Login Failed', $validator->errors()->all());
            return back()->withErrors($validator->errors())->withInput();
        }

        // dd($request->all());
        $data = $request->all();
        if (!auth()->attempt(['email' => $data['email'], 'password' => $data['password']], $request->remember)) {
            toast('top-right')->showCloseButton();
            Alert::error('Login Failed', $validator->errors()->all());
            return back()->withErrors(["password"=>'invalid password'])->withInput();
        } else {
            return redirect(route('dash.home'));
        }
    }


    public function forgot()
    {
        return view('Dashboard.Auth.sendtoken');
    }

    public function doForgot(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191|exists:users,email',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert(
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]
        );

        $act_link = route('rest', ["token" => $token, "email" => $request->email]);
        // dd($act_link);
        $body = "Rest Your Password of Account on Remon Ayad Portfolio associated to  \"$request->email\"
                Press on the below to rest your password";

        $details = [
            'act_link' => $act_link,
            'body' => $body,
        ];

        Mail::to($request->email)->send(new ForgotMail($details));



            // dd($mail);
        toast('top-right')->showCloseButton();
        Alert::success('Reset Link Sent To Your Email Successfully !');

        return back()->with($status = "Reset Link Sent To Your Email Successfully");
        // return redirect(route('home'));
    }

    public function rest($t, $e)
    {
        $token = $t;
        $email = $e;
        return view('Dashboard.Auth.newpassword', compact('token', 'email'));
    }

    public function doRest(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|email|max:191|exists:users,email',
            'password' => 'required|min:5',
            'c_password' => 'required|same:password',
        ]);

        // dd($request->all());
        $check_token = DB::table('password_resets')->where(
            [
                'email'=> $request->email,
                'token'=> $request->token,
            ]
        )->first();
        // dd($check_token);

        if (!$check_token) {
            toast('top-right')->showCloseButton();
            Alert::error('Invalid Token');
            return back();
        }
        else
        {
            $user = User::where('email' , $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();

            try{
                DB::table('password_resets')->where(
                    [
                        'email'=> $request->email,
                        'token'=> $request->token,
                    ]
                )->delete();

                toast('top-right')->showCloseButton();
                Alert::success('Password Reset Successfully !');
            }
            catch(Exception){

                toast('top-right')->showCloseButton();
                Alert::error('Password Reset Successfully !');
            }
        }


        toast('top-right')->showCloseButton();
        Alert::success('Password Reset Successfully !');

        return redirect(route('login')) ;

        // return redirect(route('home'));
    }



    public function logout()
    {
        auth()->logout();
        return redirect(route('login'));
    }
}
