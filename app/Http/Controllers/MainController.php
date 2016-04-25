<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Credential;
use Mail;

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
        $data = [
            'fname' =>  $request->input('fname'),
            'lname' =>  $request->input('lname'),
            'email' =>  $request->input('email'),
            'phone' =>  $request->input('phone'),
            'message' =>  $request->input('message'),
        ];
        
        $credential = Credential::first();
        $to_email = $credential->email;
        $to_name = $credential->name;
        
//        Mail::send('message', ['data' => $data], function ($m) use ($to_email, $to_name) {
//            $m->to($to_email, $to_name)->subject('Contact form from my demo site');
//        });
//        die();
        return redirect()->to('contact')->withMessage('message', 'Your message has been sended!');
    }
}
