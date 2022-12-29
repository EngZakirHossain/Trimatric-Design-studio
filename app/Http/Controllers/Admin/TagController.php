<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TagController extends Controller
{
    public function index(){
        $tags = Tag::orderBy('created_at', 'desc')->get();
        return view('admin-views.seo.addTag',compact('tags'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_at' => Carbon::now(),
        ]);

        return back()->with('Tag','Tag Added Successfully');
    }

    public function delete(Request $request)
    {
        $tag = Tag::find($request->id);
        $tag->delete();
        return response()->json();
    }
}
