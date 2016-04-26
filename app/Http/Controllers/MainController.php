<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactUsRequest;

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
    
    public function postSendEmail(ContactUsRequest $request)
    { 
        try
        {
            $contact = Contact::create($request->all());

            Mail::send('mails/contact-us', ['data' => $contact], function ($m) {
                $m->to(config("credentials.email"), config("credentials.name"))->subject('Contact form from my demo site');
            });

            Session::flash('message', 'Your message has been sended!');
        } 
        catch(\Exception $ex)
        {
            Session::flash('message', 'Sending error!');
        }
        
        return redirect()->to('contact');
    }
}
