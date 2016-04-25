<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
}
