<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    \App\Student::create([
   	 'nama'=>'indri',
   	 'jk'=>'P'

   ]);

   \App\Student::create([
   	 'nama'=>'dia',
   	 'jk'=>'L'

   ]);
 
    }
}
