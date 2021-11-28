<?php

namespace App\Exports;

use App\Compras;
use Maatwebsite\Excel\Concerns\FromCollection;

class ComprasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'PROVEEDOR',
            'RFC',
            'GIRO',
            'FECHA DE COMPRA',
            'MONTO',
            'DESCRIPCION',
        ];
    }

    public function collection()
    {
        return Compras::select('proveedor.empresa','proveedor.rfc','proveedor.giro','Fecha_compra','monto','descripcion')
        ->join('proveedor','proveedor.id','=','compras.id_proveedor')
        ->get();
    }
}
