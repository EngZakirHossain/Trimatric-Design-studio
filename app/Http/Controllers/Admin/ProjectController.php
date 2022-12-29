<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Profile;
use App\Model\ProfileDetails;
use App\Model\Service;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $profiles = Profile::orderBy('created_at', 'desc')->get();
        return view('admin-views.profile.profile',compact('profiles'));
    }
    public function profileDetails(){
        $profileDetails = ProfileDetails::all();
        return view('admin-views.profile.profileDetails',compact('profileDetails'));
    }
    public function addProfileInfo($id)
    {
        $profileDetails = Profile::where('id',$id)->first();
        return view('admin-views.profile.addProfileDetails',compact('profileDetails'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'serviceName' => 'required',
            'details' => 'required',
            'featureImage' => 'required|mimes:jpeg,png,jpg,bmp,gif,svg,mp4|max:10240',
        ]);

        $profile = Profile::create([
            'name' => $request->name,
            'serviceName' => $request->serviceName,
            'details' => $request->details,
            'created_at' => Carbon::now(),
        ]);
        $services=\App\Model\Service::where('id',$request->serviceName)->first();

        if ($request->hasFile('featureImage')) {
            //upload profile photo start
            $image = $request->file('featureImage');
            $name = $profile->id.'_'.$request->name . '.'.$image->getClientOriginalExtension();
            $destination = ('storage/backend/profile/'.$services->name.'/'.$request->name);
            $image->move($destination,$name);
            Profile::where('id',$profile->id)->update([
                'featureImage' => $name,
            ]);
        }
        return back()->with('Profile','Profile Added Successfully');
    }
    public function update(Request $request){
        $profile = Profile::where('id',$request->id)->first();
        $service = Service::where('id',$request->serviceName)->first();
        if($request->featureImage != ''){
            $path = ('storage/backend/profile/'.$service->name.'/'.$profile->name.'/'); // upload path

            if ($profile->featureImage != '' && $profile->featureImage != null) {
                $file_old = $path . $profile->featureImage;
                unlink($file_old);
            }
            //upload new file
            $file = $request->featureImage;
            $filename =$profile->id.'_'.$request->name . '.'.$file->getClientOriginalExtension();
            $file->move($path, $filename);
            //for update in table
            $profile->update(['featureImage' => $filename]);
        }
        Profile::where('id',$request->id)->update([
            'name' => $request->name,
            'serviceName' => $request->serviceName,
            'details' => $request->details,
        ]);

        return back()->with('message','Portfolio Updated Successfully');
    }

    public function delete(Request $request){
        $profile = Profile::find($request->id);
        $service = Service::where('id',$profile->serviceName)->first();
        $image_path = ('storage/backend/profile/'.$service->name.'/'.$profile->name.'/');

       if ($profile->featureImage != '' && $profile->featureImage != null) {
            $file_old = $image_path . $profile->featureImage;
            unlink($file_old);
         }else{
           dd('File does not exists.');
       }
        $profile->delete();
        return response()->json();

    }

    public function storeProfileInfo(Request $request)
    {

        $profiles = \App\Model\Profile::where('id',$request->profile_id)->first();
        $services = Service:: where('id',$profiles->serviceName)->first();
        $input=$request->all();
        $images=array();
        if($files=$request->file('images_video')){
            foreach($files as $file){
                $name='profile'.'_'.$file->getClientOriginalName();
                $destination = ('storage/backend/profile/'.$services->name.'/'.$profiles->name.'/profileDetails'); // upload path
                $file->move($destination,$name);
                $images[]=$name;
            }
        }
        if ($request->hasFile('before_images')) {
            //upload profile photo start
            $before_images = $request->before_images;
            $name1='before_images'.'_'.$before_images->getClientOriginalName();
            $destination = ('storage/backend/profile/'.$services->name.'/'.$profiles->name.'/profileDetails'); // upload path
            $before_images->move($destination,$name1);
        }
        if ($request->hasFile('after_images')) {
            //upload profile photo start
            $after_images = $request->after_images;
            $name2='after_images'.'_'.$after_images->getClientOriginalName();
            $destination = ('storage/backend/profile/'.$services->name.'/'.$profiles->name.'/profileDetails'); // upload path
            $after_images->move($destination,$name2);
        }

        /*Insert your data*/
        ProfileDetails::insert( [
            'images_video'=>  implode("|",$images),
            'profile_id' =>$input['profile_id'],
            'before_images' =>$name1,
            'after_images' =>$name2,
            'youtube_link' =>$input['youtube_link'],
            'render_link' =>$input['render_link'],
        ]);
        return back()->with('Profile','Profile Details Added Successfully');
    }

    public function deleteProfileInfo(Request $request){

        $profileDetails = ProfileDetails::find($request->id);
        $profile=\App\Model\Profile::where('id',$profileDetails->profile_id)->first();
        $services=\App\Model\Service::where('id',$profile->serviceName)->first();
        $image_path = ('storage/backend/profile/'.$services->name.'/'.$profile->name.'/profileDetails');;

        if (File::exists($image_path)) {
            File::deleteDirectory($image_path);
        }
        $profileDetails->delete();
        return response()->json([
            'success'=> true,
            'message' => 'Client delete successfully.'
        ]);
    }
}
