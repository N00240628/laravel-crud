<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $vehiculo = new Vehiculo();

        $vehiculo->placa='SSS-898';
        $vehiculo->modelo='FORD RAPTOR F-150';
        $vehiculo->propietario='LUIS JUNIOR NEYRA OBREGON';

        $vehiculo->save();

        $vehiculo2 = new Vehiculo();

        $vehiculo2->placa='FFF-123';
        $vehiculo2->modelo='FERRARI LAFERRARI';
        $vehiculo2->propietario='LUIS JUNIOR NEYRA OBREGON';

        $vehiculo2->save();

        $vehiculo3 = new Vehiculo();

        $vehiculo3->placa='KLK-101';
        $vehiculo3->modelo='FORD ESCORTH';
        $vehiculo3->propietario='SALVADOR JOAQUIN TORRES CABALLERO';

        $vehiculo3->save();
    }
}
