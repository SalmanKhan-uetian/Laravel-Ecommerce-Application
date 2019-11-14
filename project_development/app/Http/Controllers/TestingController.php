<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    
    public function username(){

    	echo "This is the username method in the TestingController";
    }

    public function users(){

    	$users  = array("salman", "ali", "bilal");

    	print_r($users);
    }


}
