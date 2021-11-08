<?php

namespace App\Imports;

use App\Models\Lead;
use http\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Lead([
            'date'      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
            'client'    => $row[1],
            'company'   => $row[2],
            'coast'     => $row[3],
            'origin'    => $row[4],
            'state'     => $row[5],
            'email'     => $row[6],
            'phone'     => $row[7],
            'description' => $row[8],
        ]);

        /*return new Lead([
            'client'    => $row['client'],
            'company'   => $row['company'],
            'coast'     => $row['coast'],
            'date'      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']),
            'origin'    => $row['origin'],
            'state'     => $row['state'],
            'email'     => $row['email'],
            'phone'     => $row['phone'],
            'description' => $row['description'],
        ]);*/
    }
}
