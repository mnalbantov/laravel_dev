<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin',['only'=>'settings']);
    }

    public function index(Service $service,Page $page,User $roles)
    {
        $title = 'Home';
        $service = Service::all();
        return view('hello_world',compact('title','service'));
    }

    public function settings()
    {
        echo 'die';
    }

    public function inbox()
    {

    }
}
