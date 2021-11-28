<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Proveedor;
use App\Compras;


class ProveedroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::insert([
            'empresa' => 'Bimbo',
            'rfc' => 'GMSKA3ok3K',
            'giro' => 'Comerciales',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Electra',
            'rfc' => 'ELECG33ok3',
            'giro' => 'Electrodomesticos',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'famsa',
            'rfc' => 'ELECTSLJ323KJ3',
            'giro' => 'Electrodomesticos',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Tintas',
            'rfc' => 'GMSKA3ok3K',
            'giro' => 'Impresoras',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Software',
            'rfc' => 'SOFTWASJD',
            'giro' => 'Servicios',
            'created_at' => '2021-11-28'])
        ;
         Proveedor::insert([
            'empresa' => 'Electronica',
            'rfc' => 'ELEC3J3JK2',
            'giro' => 'Electronica',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Michelin',
            'rfc' => 'MIHEJK3323K',
            'giro' => 'Servicios',
            'created_at' => '2021-11-28'])
        ;
         Proveedor::insert([
            'empresa' => 'Samsung',
            'rfc' => 'SND3JKJJN3',
            'giro' => 'Electronica',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Apple',
            'rfc' => 'KJKLJ3K223KL',
            'giro' => 'Electronica',
            'created_at' => '2021-11-28'
        ]);
         Proveedor::insert([
            'empresa' => 'Telmex',
            'rfc' => 'TEKFSK3J23K',
            'giro' => 'Servicios',
            'created_at' => '2021-11-28'
        ]);
        Compras::insert([
            'fecha_compra' => '2021-11-28',
            'monto' => '15000',
            'descripcion' => 'Servicios',
            'id_proveedor' => '1',
            'created_at' => '2021-11-28'
        ]);

    }
}
