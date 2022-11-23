<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    public function index(Request $request)
    {

        $projects = Project::select()->orderBy('created_at', 'desc')->paginate(10);


        return view('Dashboard.Projects.index', compact('projects'));
    }

    public function add()
    {

        $services = Service::all();
        return view('Dashboard.Projects.add' , compact('services'));
    }

    public function doadd(Request $request)
    {
        $selected_services = $request->has('services') ? $request->get('services') : [];
        $validator = Validator::make(
            $request->all(),
            [
                'title' => "required|string|max:50",
                'desc' => 'required|string',
                'video' => 'url|nullable',
                'url' => 'url|nullable',
                'services' => 'required',
                'services.*' =>'numeric',
                'images' => 'required',
                'images.*' =>'mimes:png,jpg,jpeg|image',
            ]
        );

        if ($validator->fails()) {
            toast('top-right')->showCloseButton();
            Alert::error('Add Failed' , $validator->errors()->all());
            return back()->with('selected_services', $selected_services)->withErrors($validator->errors())->withInput();

        } else {
        //Create With 2 stetps
            //1- Create Project in projects table
            //2- Assign its images in project_images table
        //1-


        // dd($request->all());
        $project = new Project();
        $project->title = $request->title;
        $project->desc = $request->desc;
        $project->video_url = $request->video;
        $project->url = $request->url;
        $project->save();

        //2-
        if ($request->has('images')) {
                foreach ($request->images as $image) {
                //New Image code
                $path = $image->storePublicly('projects/'.$project->title , 's3');
                $project_image = new ProjectImages();
                $project_image->project_id= $project->id;
                $project_image->url = $path;
                $project_image->save();
                }
            }
            if ($request->has('services')) {
                $project->services()->attach($request->services);
            }
            toast('top-right')->showCloseButton();
            Alert::success('Creation Done' ,$project->title. ' Created Successfully');
            return redirect(route('project'));
        }
    }


    public function edit($id)
    {
        $project = Project::find($id);
        $images = $project->images()->get();
        $services = Service::all();
        $project_services = $project->services()->get();
        $selected_services = [];

        foreach ($project_services  as $ser) {
            array_push($selected_services , $ser->id);
        }
        // dd($selected_services);

        return view('Dashboard.Projects.edit', compact('project' , 'images' , 'services' , 'selected_services'));
    }


    public function doedit(Request $request)
    {

        $selected_services = $request->has('services') ? $request->get('services') : [];


        $validator = Validator::make(
            $request->all(),
            [
                'title' => "required|string|max:50",
                'images' => 'nullable',
                'images.*' =>'mimes:png,jpg,jpeg|image',
                'desc' => 'required|string',
                'id' => 'exists:projects,id',
                'video' => 'url|nullable',
                'url' => 'url|nullable',
                'services' => 'required',
                'services.*' =>'numeric',
            ]
        );

        if ($validator->fails()) {
            return back()->with('selected_services', $selected_services)->withErrors($validator->errors())->withInput();
        } else {

            $project = Project::find($request->id);
            $project->title = $request->title;
            $project->desc = $request->desc;
            $project->video_url = $request->video;
            $project->url = $request->url;
            $project->save();

            if ($request->has('services')) {
                // $project->services()->attach($request->services);
                $project->services()->sync($request->services);
            }
            toast('top-right')->showCloseButton();
            Alert::info('Edit Done' ,$project->title. ' Edited Successfully');

            return redirect(route('project'))->with($success = 'Project Edited Succefully');
        }
    }

    public function show($id)
    {
        $project = Project::find($id);
        $images = $project->images()->get();
        return view('Dashboard.Projects.show', compact('project' , 'images'));
    }

    public function delete($id)
    {
        $project = Project::find($id);
        $images = $project->images()->get();
        // dd($images);
        foreach ($images as $image) {
            $path = $image->url;
            if(Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->delete($path);
            }
        }
        toast('top-right')->showCloseButton();
        Alert::success('Delete Done' ,$project->title. ' Deleted Successfully');
        $project->delete();
        return (redirect(route('project')));
    }



    public function usershow($id)
    {
        $project = Project::find($id);
        return view('blog', compact('project'));
    }
}
