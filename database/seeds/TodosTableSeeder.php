<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'item' => '筋トレ',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'item' => '犬の散歩',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'item' => 'ゴミ出し',
        ];
        DB::table('todos')->insert($param);
    }
}
