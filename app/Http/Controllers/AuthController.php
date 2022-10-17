<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120187,
            'Name' => 'Raka Andriy Shevchenko',
            'Phone' => '082138353355',
            'Class' => 'XII RPL 6'
        ];
    }
}
