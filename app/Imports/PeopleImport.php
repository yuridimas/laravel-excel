<?php

namespace App\Imports;

use App\Person;
use Maatwebsite\Excel\Concerns\ToModel;

class PeopleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Person([
            'name' => $row[0],
            'phone' => $row[1],
            'address' => $row[2],
        ]);
    }
}
