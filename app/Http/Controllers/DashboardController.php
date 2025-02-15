<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {

        // assume the following mock data is being gotten from somewhere

        $users = [
            [
                'name' => 'John Doe',
                'age' => 25,
            ],
            [
                'name' => 'Jane Doe',
                'age' => 24,
            ],
            [
                'name' => 'John Smith',
                'age' => 17,
            ]
        ];

        return view('dashboard', ['users' => $users]);
    }
}
