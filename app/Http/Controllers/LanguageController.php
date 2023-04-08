<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
