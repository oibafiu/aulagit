<?php
namespace App\Relatorios;
class RelatoriosExport implements \Maatwebsite\Excel\Concerns\FromCollection
{
    public function collection()
    {
        return factory('App\User', all)->make();
    }
}