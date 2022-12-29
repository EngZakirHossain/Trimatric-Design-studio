<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Client;
use App\Model\Message;
use App\Model\Profile;
use App\Model\Service;
use App\Notifications\NewMessage;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Home()
    {
        return view('web-views.home');
    }
    public function AboutUs()
    {
        return view('web-views.about');
    }
    public function Service()
    {
        return view('web-views.service');
    }
    public function FindUs()
    {
        return view('web-views.findUs');
    }
    public function Team()
    {
        return view('web-views.team');
    }
    public function Client()
    {
         $clients = Client::get();
        return view('web-views.client',compact('clients'));
    }
    public function Portfolio()
    {
        return view('web-views.portfolio');
    }
    public function Message(Request $request )
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' =>  $request->message,
        ]);
        $admins = Admin::all();
        foreach ($admins as $admin) {

            $admin->notify(new NewMessage($request->name));
        }
        return redirect()->back();
    }
    //single Graphics services
    public function LogoBanding()
    {
        return view('web-views.services.graphics._logoBanding');
    }
    public function IconDesign()
    {
        return view('web-views.services.graphics._iconDesign');
    }
    public function StaticGraphicsDesign()
    {
        return view('web-views.services.graphics._staticGraphics');
    }
    public function DynamicGraphicsDesign()
    {
        return view('web-views.services.graphics._dynamicGraphics');
    }
    public function GraphicsPrint()
    {
        return view('web-views.services.graphics._graphicsPrint');
    }
    //single Event services
    public function CorporateEvent()
    {
        return view('web-views.services.events._corporateEvent');
    }
    public function SocialEvent()
    {
        return view('web-views.services.events._socialEvent');
    }
    public function CulturalEvent()
    {
        return view('web-views.services.events._culturalEvent');
    }

    //single digital Marketing services
    public function MarketingPlanning()
    {
        return view('web-views.services.marketing._marketingPlanning');
    }
    public function Facebook()
    {
        return view('web-views.services.marketing._facebook');
    }
    public function Youtube()
    {
        return view('web-views.services.marketing._youtube');
    }
    public function Influential()
    {
        return view('web-views.services.marketing._influential');
    }
    public function GoogleAds()
    {
        return view('web-views.services.marketing._googleAds');
    }
    public function Seo()
    {
        return view('web-views.services.marketing._seo');
    }

    //single Production services
    public function Photography()
    {
        return view('web-views.services.production._photography');
    }
    public function TVC()
    {
        return view('web-views.services.production._tvc');
    }
    public function Print()
    {
        return view('web-views.services.production._print');
    }

    //single 3D services
    public function Modeling()
    {
        return view('web-views.services.3D._modeling');
    }
    public function VFX()
    {
        return view('web-views.services.3D._vfx');
    }
    public function Animation()
    {
        return view('web-views.services.3D._animation');
    }
    public function  Architectural()
    {
        return view('web-views.services.3D._architectural ');
    }
    public function  Interior()
    {
        return view('web-views.services.3D._interior ');
    }
    public function  Landscape()
    {
        return view('web-views.services.3D._Landscape');
    }

    //single web services
    public function DomainHosting()
    {
        return view('web-views.services.web._domainHosting');
    }
    public function Web()
    {
        return view('web-views.services.web._web');
    }
    public function App()
    {
        return view('web-views.services.web._app');
    }

    //single profile
    public function serviceProfile($serviceName)
    {
       $serviceId = Service::where('name',$serviceName)->first();
       $serviceProfile = Profile::Where('serviceName',$serviceId->id)->get();
        return view('web-views.profile-details._serviceProfile',compact('serviceProfile'));
    }
    public function profileDetails($name)
    {
        $serviceProfileDetails = Profile::Where('name',$name)->first();
        return view('web-views.profile-details._serviceProfileDetails',compact('serviceProfileDetails'));
    }

    public function UiProfile()
    {
        return view('web-views.profile-details.components._uiProfile');
    }

    public function Robot()
    {
        return view('web-views.profile-details._robot');
    }
    public function Juice()
    {
        return view('web-views.profile-details._fruitJuice');
    }
    public function Buggy()
    {
        return view('web-views.profile-details._buggy');
    }
}
