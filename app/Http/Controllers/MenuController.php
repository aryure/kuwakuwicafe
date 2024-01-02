<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        return view('Menu');
    }


    public function create()
    {
        // 
    }


    public function store(Request $request)
    {
        // 
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        // 
    }
}
