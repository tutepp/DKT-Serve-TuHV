<?php

namespace App\Http\Controllers;
use Closure;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);
        return redirect()->back();
    }

}
