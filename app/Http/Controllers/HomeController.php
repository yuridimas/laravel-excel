<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $people = Person::paginate();

        return view('home')
            ->with('people', $people);
    }
}
