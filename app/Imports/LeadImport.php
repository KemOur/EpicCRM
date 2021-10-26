<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lead([
            'client'    => $row['client'],
            'company'   => $row['company'],
            'coast'     => $row['coast'],
            'date'      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']),
            'origin'    => $row['origin'],
            'state'     => $row['state'],
            'email'     => $row['email'],
            'phone'     => $row['phone'],
            'description' => $row['description'],
        ]);
    }
}
