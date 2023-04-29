<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class webAppController extends Controller
{
    public function index()
    {


        return view('welcome');
    }

}
