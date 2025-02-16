<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {

        // assume the following mock data is being gotten from somewhere


        $idea = new Idea();
        $idea->content = 'test';
        $idea->likes = 0;
        $idea->save();

        return view('dashboard');
    }
}
