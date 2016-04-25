<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Credential;
use Mail;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    
    public function getIndex()
    {
        return view('parts/index');
    }
    
    public function getAutomation()
    {
        return view('parts/automation');
    }
    
    public function getSystemIntegration()
    {
        return view('parts/system-integration');
    }
    
    public function getConsulting()
    {
        return view('parts/consulting');
    }

    public function getContact()
    {
        return view('parts/contact');
    }
    
    public function postSendEmail(Request $request)
    {
        $credential = Credential::first();
        
        Mail::send('message', ['data' => $request->all()], function ($m) use ($credential) {
            $m->to($credential->email, $credential->name)->subject('Contact form from my demo site');
        });
        Session::flash('message', 'Your message has been sended!');
        return redirect()->to('contact');
    }
}
