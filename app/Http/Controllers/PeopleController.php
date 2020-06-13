<?php

namespace App\Http\Controllers;

use App\Exports\PeopleExport;

class PeopleController extends Controller
{
    public function export()
    {
        return new PeopleExport();
    }
}
