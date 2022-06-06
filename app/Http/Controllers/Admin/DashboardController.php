<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct(){
        //echo 'Run';
    }
    public function index(){
        return '<h1>Dashboard Welcome</h1>';
    }
}
