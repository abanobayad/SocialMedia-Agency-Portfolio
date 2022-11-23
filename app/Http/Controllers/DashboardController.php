<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function home()
    {
        return view('Dashboard.home');
    }

    public function edit()
    {
        return view('Dashboard.Auth.edit');
    }

    public function doedit(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $validator = Validator::make($data,
        [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'password' => 'min:6|nullable|same:password_confirmation',
            'password_confirmation' => 'min:6|nullable',
        ]);

        if($validator->fails())
        {
            toast('top-right')->showCloseButton();
            Alert::error('Edit Failed', $validator->errors()->all());
            return back()->withErrors($validator->errors())->withInput();
        }


        $user = User::find(Auth::user()->id);
        if (!is_null($request->password)) { //If Req Has Password


            //start img
            $OldImgName = $user->avatar;
            if ($request->hasFile('image')) {

                //New Image code
                $path = $user->avatar;
                if(Storage::disk('s3')->exists($path)) {
                    Storage::disk('s3')->delete($path);
                }
                $path = $request->file('image')->storePublicly('users' , 's3');
                $data['image'] = $path;

            }
            //else of img cond
            else
            $data['image'] = $OldImgName;
            $user->update([
                'name'           => $request->name,
                'email'          => $request->email,
                'password'       => Hash::make($request->password),

            ]);
            $user->avatar= $data['image'];
            $user->save();
            toast('top-right')->showCloseButton();
            Alert::success('Edit Done' , 'Data changed successfully with new password');
            return back();
        } else { //If Req Has NOT Password
            $OldImgName = $user->avatar;
            // dd($OldImgName);
            if ($request->hasFile('image')) {

                //New Image code
                $path = $user->avatar;
                if(Storage::disk('s3')->exists($path)) {
                    Storage::disk('s3')->delete($path);
                }
                $path = $request->file('image')->storePublicly('users' , 's3');
                $data['image'] = $path;
            } else
            $data['image'] = $OldImgName;
            $user->update([
                'name'           => $request->name,
                'email'          => $request->email,
            ]);
            $user->avatar= $data['image'];
            $user->save();
            toast('top-right')->showCloseButton();
            Alert::success('Edit Done' , 'Data Changed Successfully with The Same Password');
            return back();
        }
    }
}
