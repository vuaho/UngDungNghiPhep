<?php

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert(
            [
                [
                   
                   
                    'reason' => 'dau',
                    'day_off'=>2019-04-17 ,
                    'content'=>'dfhjkfcjhkjgkh',
                    'user_id'=>1,
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],

                [
                    
                    'reason' => 'dau',
                    'day_off'=>2019-04-20,
                    'content'=>'dfhjkfcjhkjgkh',
                    'user_id'=>3,
                    'is_delete' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]

               
            ]
        );
    }
}
