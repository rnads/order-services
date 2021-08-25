<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name'  => 'CODE34', 
            'slug'  => 'code34',
            'cnpj'  => '27521951000162'    
        ]);
    }
}
