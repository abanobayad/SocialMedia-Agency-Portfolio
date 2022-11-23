<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index(Request $request)
    {

        $skills = Service::select()->orderBy('created_at', 'desc')->paginate(10);
        return view('Dashboard.Services.index', compact('skills'));
    }

    public function doadd(Request $request)
    {
        if($request->ajax())
        {
            $request->validate(
                [
                    'title' => 'required|unique:services,title|string',
                    'desc' => 'required|string',
                    'icon' => 'required|string',
                ]
            );


            $skill = new Service();
            $skill->title = $request->title;
            $skill->desc = $request->desc;
            $skill->icon = $request->icon;
            $skill->save();

            $response['skill'] = $skill;
            return view('Dashboard.Services.row')->with($response);

        }



    }


    public function edit($id)
    {
        $data = Service::findOrFail($id);
        return response()->json($data);
    }

    public function doedit(Request $request)
    {

        if($request->ajax())
        {
            if($request->ajax())
            {
                $request->validate(
                    [
                        'e_title' => 'required|string',
                        'e_desc' => 'required|string',
                        'e_icon' => 'required|string',
                    ]
                );
            }
            $skill = Service::findOrfail($request->id);
            $skill->title = $request->e_title;
            $skill->desc = $request->e_desc;
            $skill->icon = $request->e_icon;
            $skill->updated_at = now();
            $skill->save();
        }
        return view('Dashboard.Services.rowEdit' , compact('skill'));
    }

    public function delete($id)
    {
        $skill  = Service::findOrFail($id);
        $skill->delete();
        return response()->json(["success" => "This Row Deleted Successfully" , "id" => $id ]);
    }

}
