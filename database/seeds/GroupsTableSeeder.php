<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(
            [
                [
                    'name' => 'àdjhkj',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],

                [
                    'name' => 'gdhfh',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],

                [
                    'name' => 'gfhfg',
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]
            ]
        );
    }
}
