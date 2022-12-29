<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\PageInformation;
use App\Model\Tag;
use App\Notifications\SeoAdded;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    public function index(){
        $seo_info = PageInformation::orderBy('created_at', 'desc')->get();
        $tags = Tag::all();
        return view('admin-views.seo.seoInformation',compact('seo_info','tags'));
    }
    public function store(Request $request){
        $request->validate([
            'page_title' => 'required',
            'meta_description' => 'required',
        ]);
        $tag = $request->tag_id;
        $tags = implode(',', $tag);

        $input['tag_id'] = $tags;
        $input['page_title'] = $request->page_title;;
        $input['meta_description'] = $request->meta_description;;
        $input['title_slug'] = Str::slug($request->page_title);
        PageInformation::create($input);

        $admins = Admin::all();
        foreach ($admins as $admin) {

            $admin->notify(new SeoAdded($request->page_title));
        }

        return back()->with('SEO','SEO Added Successfully');
    }
    public function delete(Request $request)
    {
        $tag = PageInformation::find($request->id);
        $tag->delete();
        return response()->json();
    }
}
