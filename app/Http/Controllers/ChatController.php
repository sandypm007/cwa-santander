<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChatController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('chat');
    }
}
