<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class RoleExampleExport implements FromView
{
    use Exportable;

    /**
     * data
     */
    private Collection $data;

    /**
     * constructor method
     *
     * @return void
     */
    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    /**
     * export from view
     */
    public function view(): View
    {
        return view('stisla.user-management.roles.export-excel-example', [
            'data' => $this->data,
            'isExport' => true,
        ]);
    }
}
