<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    //pertama yaitu buat dulu fuction seperti yang ada dibawah ini
    public function test()
    {
    	// buat aray multidimensi
    	// $data=[
    	// 	'siswa'=> \App\Student::all()
    	// ];
    	// return $data;

    	 	// buat aray multidimensi
   
    	
    	return \App\Student::paginate(1);
    }
     
   
    

}
 