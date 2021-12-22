<?php

use Illuminate\Database\Seeder;


class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'title_1',
            'detail' => 'detail_1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
