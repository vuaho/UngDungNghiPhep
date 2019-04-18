<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert(
            [
                [
                    'name' => 'xoa dơn',
                    'description'=>'dfhjkfcjhkjgkh',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],

                [
                    'name' => 'hủy đơn',
                    'description'=>'zxgfhfcjhkjgkh',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],

                [
                    'name' => 'gfhfg',
                    'description'=>'dfhjkfcjhkjgkh',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]
            ]
        );
    }
}
