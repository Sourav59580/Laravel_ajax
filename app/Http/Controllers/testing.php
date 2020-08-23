<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function result(){
        echo $_POST['name'];
    }
}
