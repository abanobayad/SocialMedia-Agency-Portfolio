<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
public function index()
{
    $about = About::first();
    return view('Dashboard.About.index' , compact('about'));
}

public function edit($id)
{
    $about = About::find($id);
    return view('Dashboard.About.edit' , compact('about'));
}

public function doedit(Request $request)
{
    $data = $request->all();

    $validator = Validator::make($data, [
        'id' => 'required|exists:abouts,id',
        'name' => 'string|required|max:255',
        'phone' => 'string|required',
        'email' => 'string|required|email',
        'description' => 'string|required',
        'address' => 'string|required',
        'JobTitle' => 'string|required',
        'titles' => 'string|required',
        'image' => 'nullable|image|mimes:png,jpg,jpeg',
        'cv' => 'nullable|file|mimes:pdf',
        'pro' => 'nullable|file|mimes:pdf',
    ]);

    // dd($request->all());
    if($validator->fails())
    {
        toast('top-right')->showCloseButton();
        Alert::error('Edit Failed', $validator->errors()->all());
        return back()->withErrors($validator->errors())->withInput();
    }


    $about = About::find($request->id);


    if ($request->hasFile('cv')) {
        $old_cv = $about->cv;

        if($old_cv == null)
        {
            $path = $request->file('cv')->storePublicly('pdfs/cv' , 's3');
            // $url = Storage::disk('s3')->url($path);
            $new_cv = $path;
            $about->cv = $new_cv;
            $about->save();
        }
        else
        {
            if(Storage::disk('s3')->exists($old_cv)) {
                Storage::disk('s3')->delete($old_cv);
            }
            $path = $request->file('cv')->storePublicly('pdfs/cv' , 's3');
            // $url = Storage::disk('s3')->url($path);
            $new_cv = $path;
            $about->cv = $new_cv;
            $about->save();
        }
    }



    if ($request->hasFile('pro')) {
        $old_pro = $about->pro;

        if($old_pro == null)
        {
            $path = $request->file('pro')->storePublicly('pdfs/pro' , 's3');
            // $url = Storage::disk('s3')->url($path);
            $new_pro = $path;
            $about->pro = $new_pro;
            $about->save();
        }
        else
        {
            if(Storage::disk('s3')->exists($old_pro)) {
                Storage::disk('s3')->delete($old_pro);
            }
            $path = $request->file('pro')->storePublicly('pdfs/pro' , 's3');
            // $url = Storage::disk('s3')->url($path);
            $new_pro = $path;
            $about->pro = $new_pro;
            $about->save();
        }
    }



    if ($request->hasFile('image')) {
        //check old image
        $OldImg = $about->image;
         //has no old image
        if ($OldImg == null) {
            $path = $request->file('image')->storePublicly('about' , 's3');
            // $url = Storage::disk('s3')->url($path);
            $newImgName = $path;
        }
        //has old image
        else {
            $path = $about->image;
            if(Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->delete($path);
            }
            $path = $request->file('image')->storePublicly('about' , 's3');
            $newImgName = $path;
            }

        $about->name = $request->name;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->phone = $request->phone;
        $about->JobTitle = $request->JobTitle;
        $about->titles = $request->titles;
        $about->desc = $request->description;
        $about->image = $newImgName;
    }
    else
    {
        $about->name = $request->name;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->phone = $request->phone;
        $about->JobTitle = $request->JobTitle;
        $about->titles = $request->titles;
        $about->desc = $request->description;
    }
    $about->save();

    toast('top-right')->showCloseButton();
    Alert::success('Edit Done');
    return redirect(route('about'));
}

}
