<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Project;

class IndexController extends Controller
{
    public function index()
    {

        $about = About::first();
        $skills = Skill::all();
        $services = Service::all();
        $projects = Project::all();


        //  dd($about);

        return view('index' , compact('about' , 'skills' , 'services' , 'projects'));
    }
}
