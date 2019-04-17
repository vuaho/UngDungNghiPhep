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
        DB::table('forms')->truncate();
        App\Form::create([
        	'fullname' => 'Badman',
        	'email' =>'badman@gmail.com',
        ]);
    }
}
