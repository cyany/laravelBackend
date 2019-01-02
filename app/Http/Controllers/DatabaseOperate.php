<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Http\

class DatabaseOperate extends Controller
{
    public function index(){
    	//get whole table data
    	// $users = DB::table('users')->get();
    	// var_dump($users);

    	// select data of 'id=1';
    	// $me = DB::table('users')->where('id',1)->first();
    	// echo $me->name;

    	// out one filed
    	// $email = DB::table('users')->where('id',2)->value('name');
    	// var_dump($email);

    	// select a list of cloumn
    	// $names = DB::table('users')->pluck('email');
    	// foreach ($names as $name => $value) {
    	// 	echo $name.$value.'<br>';
    	// }

    	// oop!error.
    	// DB:table('users')->orderBy('id')->chunk(1,function($users){
    	// 		foreach ($users as $key => $value) {
    	// 			echo $key.$value.'<br>';
    	// 		}
    	// });

       // count,max,min
    	// $count = DB::table('users')->count();
    	// echo $count;
    	// $max = DB::table('users')->max('name');
    	// echo $max;

    	// exist or not exist exist return 1 not exist empty
    	// $existsornot = DB::table('users')->where('id',2)->exists();
    	// echo $existsornot;

    	// select specify flied
    	// $me = DB::table('users')->select('name','email')->get();
    	// echo $me;



    }
}
