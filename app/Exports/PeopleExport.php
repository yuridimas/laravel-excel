<?php

namespace App\Exports;

use App\Person;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PeopleExport implements FromView, Responsable, ShouldAutoSize
{
    use Exportable;

    private $fileName = 'people.xlsx';

    private $writerType = Excel::XLSX;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.people',[
            'people' => Person::all()
        ]);
    }
}
