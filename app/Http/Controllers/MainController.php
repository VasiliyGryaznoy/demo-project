<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    
    public function getIndex()
    {
        return view('parts/index');
    }
    
    public function getContact()
    {
        return view('parts/contact');
    }
}
