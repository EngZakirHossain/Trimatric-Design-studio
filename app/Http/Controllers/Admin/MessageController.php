<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin-views.message.index',compact('messages'));
    }
    public function delete(Request $request)
    {
        $message = Message::find($request->id);
        $message->delete();
        return response()->json();
    }
}
