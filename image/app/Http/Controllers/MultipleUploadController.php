<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use DB;
class MultipleUploadController extends Controller
{
    
    function index(){
        return view('multiple_file_upload');

    }
    function reserve(){
        return view('reserve');
    }
    function upload(Request $request){
        $image_code='';
        $images=$request->file('file');
        $output=[];
        $project = new project();
        foreach($images as $image){
            $new_name=rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $image_code ='<div class="picture" style="height:300px;overflow:hidden;text-align:center;"><img src="/images/'.$new_name. ' "class="img-thumbnail"/></div>';
           $description=$request->description;
          $venue=$request->venue;
           array_push($output,[$image_code,$description,$venue]);
          
           $project->venue =$venue;
            $project->description =$description;
            $project->file =$new_name;
            $project->save();
        }
        
        $posts = project::all();
        return view('view')->with(compact('posts'));

     
    }



}
