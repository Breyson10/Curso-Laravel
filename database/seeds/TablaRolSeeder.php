<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rols =[
        'adminstrador',
        'editor',
        'supervisor'
      ];

      foreach ($rols as $key =>  $rol) {
            DB::table('rol')->insert([
                'nombre' => $rol,
                'created_at' => Carbon::now()->format('Y-m-d H:1:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:1:s'),
        ]);
      }

    }
}
