<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->paginate(10);

        return view('welcome')->with(compact('threads'));
    }
}
