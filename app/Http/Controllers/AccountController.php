<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    public function edit()
    {
        return view('Dashboard.Account.edit');
    }

    public function doedit(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'image' => 'nullable|image|mimes:png,jpg,jpeg',
                'password' => 'min:6|nullable|same:password_confirmation',
                'password_confirmation' => 'min:6|nullable',
            ]
        );

        if ($validator->fails()) {
            toast('top-right')->showCloseButton();
            Alert::error('Edit Fail', $validator->errors()->all());
            return redirect(route('setting.edit'))->withErrors($validator->errors())->withInput();
            // dd('THE');
        }

            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();


            //start img
            // Check for Old Image
            if ($request->hasFile('image')) {
                $OldImgName = $user->image;
                //case 1 = has no old image
                if ($OldImgName == null) {
                    $path = $request->file('image')->storePublicly('users', 's3');
                    $user->image = $path;
                    $user->save();
                }
                 else //has old image
                {
                    if (Storage::disk('s3')->exists($OldImgName)) {
                        Storage::disk('s3')->delete($OldImgName);
                    }
                    $path = $request->file('image')->storePublicly('users', 's3');
                    $user->image = $path;
                    $user->save();
                }
            }

            //Handle Password
            if ($request->password != null) {
                $user->password = Hash::make($request->password);
                $user->save();
                toast('top-right')->showCloseButton();
                Alert::success('Edit Done', 'Data changed successfully with new password');
                return redirect(route('setting.edit'));
            } else {
                toast('top-right')->showCloseButton();
                Alert::success('Edit Done', 'Data Changed Successfully with The Same Password');
                return redirect(route('setting.edit'));
            }
        }
    }
