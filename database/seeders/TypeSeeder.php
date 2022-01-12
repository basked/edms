<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docs = array(
            ['name' => 'Служебная записка', 'short_name' => 'СЗ','is_active' => 1],
            ['name' => 'Протокол', 'short_name' => 'ПР','is_active' => 1],
            ['name' => 'Технико-экономическое обоснование','short_name' => 'ТЭО', 'is_active' => 1],
            ['name' => 'Приказ','short_name' => 'ПРИК', 'is_active' => 1],
            ['name' => 'Распоряжение','short_name' => 'РАСП', 'is_active' => 1],
            ['name' => 'Прочее','short_name' => 'ПРОЧ', 'is_active' => 1],
        );
        foreach ($docs as $doc){

            \App\Models\Type::factory()->create(['name' => $doc['name'], 'short_name' => $doc['short_name'],     'is_active'=>$doc['is_active']]);
        }}

}

