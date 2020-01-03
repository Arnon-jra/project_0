<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function about(){
        
        return view('about');
    }

    public function projects(){
        
        return view('projects');
    }

    public function phdWork(){
        
        return view('phdWork');
    }

    public function classes(){
        
        return view('classes');
    }

    public function services(){

        // Models -> rep of data base tables
        // Naming convention
        /* 
        Model - singular
        Service

        Table - plural
        services
        */
        
        /* $services = [
            'service 1',
            'service 2',
            'service 3',
            'service 4',
        ]; */

        $services = \App\Service::all();
        // dd($services);

        return view('services', compact('services'));
    }

    public function iot_platform(){
        
        return view('iot_platform');
    }

    public function contact(){
        
        return view('contact');
    }


}
