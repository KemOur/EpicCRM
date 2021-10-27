<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadExport implements FromCollection
{
    /**
     * @return array
     */
    /*public function headings():array
    {
        return ['id','client','coast','company','date','description','origin','email','phone','state'];
        // TODO: Implement headings() method.
    }*/
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Lead::all();
        //return collect(Lead::getLead());
    }

}
