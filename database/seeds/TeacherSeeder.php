<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Teacher::create([
   	 'nama'=>'akmal',
   	 'jk'=>'L'

   ]);

   \App\Teacher	::create([
   	 'nama'=>'Asep Doni',
   	 'jk'=>'L'

   ]);
    }
}
