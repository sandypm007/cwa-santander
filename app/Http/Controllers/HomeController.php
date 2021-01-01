<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('home', ['configuration' => Configuration::newOrFind()]);
    }
}
