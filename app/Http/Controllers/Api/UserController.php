<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Request;

class UserController extends Controller
{
    public function show(Request $request){
        return $request->user();
    }
}