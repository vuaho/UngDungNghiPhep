<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                'name' => 'thu',
                'email' => 'thu'.'@gmail.com',
                'password' => bcrypt('000000'),
                'phone'=>'01238623845',
                'address'=>'101 Lê Hữu Trác',
                'deparment_id'=>1,
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                ],
                
                [
                    'name' => 'vua',
                    'email' => 'vua'.'@gmail.com',
                    'password' => bcrypt('000000'),
                    'phone'=>'01629648357',
                    'address'=>'10 Lê Hữu Trác',
                    'deparment_id'=>2,
                    'is_delete' => 1,
                    'created_at' => NEW DateTime(),
                    'updated_at' => NEW DateTime(),
                ],
                
                [
                    'name' => 'sinh',
                    'email' => 'sinh'.'@gmail.com',
                    'password' => bcrypt('000000'),
                    'phone'=>'0929511321',
                    'address'=>'101 Lê Duẩn',
                    'deparment_id'=>3,
                    'is_delete' => 1,
                    'created_at' => NEW DateTime(),
                    'updated_at' => NEW DateTime(),
                ]
            ]
                );
    }
}
