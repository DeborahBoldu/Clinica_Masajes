<?php

namespace App\Http\Controllers;

use App\Models\Service; 
use App\Models\Banner;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::active()->limit(3)->get();
        return view('home', compact('services'));
    }

    public function services()
    {
        $services = Service::active()->get();
        return view('services.index', compact('services'));
    }

    
    public function serviceShow(Service $service)
    {
        return view('services.show', compact('service'));
    }

    
}
