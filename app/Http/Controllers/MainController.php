<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        var_dump($fname);
        var_dump($lname);
        var_dump($email);
        var_dump($phone);
        var_dump($message);
        die();
    }
}
