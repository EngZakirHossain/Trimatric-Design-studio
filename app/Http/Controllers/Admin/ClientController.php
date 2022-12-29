<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Client;
use App\Notifications\ClientAdded;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderBy('created_at', 'desc')->get();
        return view('admin-views.client.index',compact('clients'));
    }
    public function addNew(Request $request){
        $request->validate([
            'name' => 'required',
            'web' => 'required',
            'address' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'web' => $request->web,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('logo')) {

            //upload profile photo start
            $image = $request->file('logo');
            $name = $client->id.'_'.$request->name . '.'.$image->getClientOriginalExtension();
            $destination = ('storage/backend/clients/');
            $image->move($destination,$name);
            Client::findOrFail($client->id)->update([
                'logo' => $name,
            ]);
        }
        $admins = Admin::all();
        foreach ($admins as $admin) {

            $admin->notify(new ClientAdded($request->name));
        }

        if ($admins) {
            return back()->with('success', 'Success! Client created');
        }
        else {
            return back()->with('failed', 'Failed! Client not created');
        }
    }
    public function delete(Request $request)
    {
        $client = Client::find($request->id);
        $image_path = ("storage/backend/clients/{$client->logo}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $client->delete();
        return response()->json([
            'success'=> true,
            'message' => 'Client delete successfully.'
        ]);
    }

    public function update(Request $request){
        $client = Client::where('id',$request->id)->first();

        if($request->hasFile('logo')){
            $path = ('storage/backend/clients/'); // upload path
            $file_old = $path . $client->logo;
            unlink($file_old);
            //upload new file
            $file = $request->logo;
            $filename =$client->id.'_'.$request->name . '.'.$file->getClientOriginalExtension();
            $file->move($path, $filename);
            //for update in table
            $client->update(['logo' => $filename]);
        }else{
            $client->update(['logo' => $client->logo]);
        }
        Client::where('id',$request->id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'web' => $request->web,
        ]);

        return back()->with('message','Client Updated Successfully');
    }

}
