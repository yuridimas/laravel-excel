<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PeopleExport;
use App\Imports\PeopleImport;
use Maatwebsite\Excel\Facades\Excel;

class PeopleController extends Controller
{
    public function export()
    {
        return new PeopleExport();
    }

    public function import(Request $request)
    {
        $rules = [
            'upload' => 'required|mimes:xlsx,csv|max:2000',
        ];

        $ruleMessages = [
            'upload.required' => 'File harus dipilih',
            'upload.mimes' => 'Format tidak sesuai',
            'upload.max' => 'Maksimum 2MB',
        ];

        $this->validate($request, $rules, $ruleMessages);

        Excel::import(new PeopleImport, $request->file('upload'));

        return back()->with('status', 'Import successfully.');
    }
}
