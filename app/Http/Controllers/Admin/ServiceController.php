<?php

namespace App\Http\Controllers\Admin;

use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Model\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Scalar\MagicConst\File;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('created_at', 'desc')->get();

        return view('admin-views.services.service',compact('services'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $service = Service::create([
            'name' => $request->name,
            'parent_id' => 0,
            'position' => 0,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('thumbnail')) {
            //upload profile photo start
            $image = $request->file('thumbnail');
            $name = $service->id.'_'.$request->name . '.'.$image->getClientOriginalExtension();
            $destination = ('storage/backend/service/'.$request->name);
            $image->move($destination,$name);
            Service::where('id',$service->id)->update([
                'thumbnail' => $name,
            ]);
        }
        if ($service) {
            return back()->with('success', 'Success! Service created');
        }
        else {
            return back()->with('failed', 'Failed! Service not created');
        }
    }
    public function storeSubService(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $service = Service::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'position' => 0,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('thumbnail')) {
            //upload profile photo start
            $image = $request->file('thumbnail');
            $name = $service->id.'_'.$request->name . '.'.$image->getClientOriginalExtension();
            $destination = ('storage/backend/subService/');
            $image->move($destination,$name);
            Service::where('id',$service->id)->update([
                'thumbnail' => $name,
            ]);
        }
        return back()->with('SubService','SubService Added Successfully');
    }
    public function delete(Request $request)
    {
        $service = Service::find($request->id);
        if ($service->parent_id==0){
            $image_path = ('storage/backend/service/'.$service->name.'/'.$service->thumbnail);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $service->delete();
            return response()->json();
        }else{
            $image_path = ('storage/backend/subService/'.$service->thumbnail);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $service->delete();
            return response()->json();
        }

    }
}
