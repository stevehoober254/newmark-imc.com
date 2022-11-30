<?php

namespace App\Exports;

use App\Models\PersonalHistoryForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// class PersonalHistoryFormExport implements FromCollection
class PersonalHistoryFormExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return PersonalHistoryForm::all();
    // }
    public function view(): View
    {
        return view('exports.phf', [
            'phfs' => PersonalHistoryForm::orderBy('id', 'desc')->get()
        ]);
    }
}
