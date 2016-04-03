<?php
/**
 * Created by PhpStorm.
 * User: meto
 * Date: 16-1-9
 * Time: 21:03
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        echo 'admin area';
    }


}