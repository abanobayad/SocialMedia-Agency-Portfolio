<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;


class SkillController extends Controller
{
    public function index(Request $request)
    {

        $skills = Skill::select()->orderBy('created_at', 'desc')->paginate(10);


        return view('Dashboard.Skills.index', compact('skills'));
    }

    public function doadd(Request $request)
    {
        if($request->ajax())
        {
            $request->validate(
                [
                    'title' => 'required|unique:skills,title|string',
                    'value' => 'required|numeric',
                ]
            );


            $skill = new Skill();
            $skill->title = $request->title;
            $skill->value = $request->value;
            $skill->save();

            $response['skill'] = $skill;
            return view('Dashboard.Skills.row')->with($response);

        }



    }


    public function edit($id)
    {
        $data = Skill::findOrFail($id);
        return response()->json($data);
    }

    public function doedit(Request $request)
    {

        // dd($request->all());

        if($request->ajax())
        {
            if($request->ajax())
            {
                $request->validate(
                    [
                        'e_title' => 'required|string',
                        'e_value' => 'required|numeric',
                    ]
                );
            }
            // dd($request->all());
            $skill = Skill::findOrfail($request->id);
            // dd($skill);
            $skill->title = $request->e_title;
            $skill->value = $request->e_value;
            $skill->updated_at = now();
            $skill->save();
        }
        return view('Dashboard.Skills.rowEdit' , compact('skill'));
    }

    public function delete($id)
    {
        $skill  = Skill::findOrFail($id);
        $skill->delete();
        return response()->json(["success" => "This Row Deleted Successfully" , "id" => $id ]);
    }

}
