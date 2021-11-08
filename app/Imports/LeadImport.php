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
            'id'    => $row[0],
            'client'    => $row[1],
            'company'   => $row[2],
            'coast'     => $row[3],
            'date'      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]),
            'origin'    => $row[5],
            'state'     => $row[6],
            'email'     => $row[7],
            'phone'     => $row[8],
            'description' => $row[9],
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
