<?php

namespace App\Exports;

use App\Level;
use Maatwebsite\Excel\Concerns\FromCollection;

class LevelsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Level::all();
    }
}
