<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index(){

$factory = (new Factory())
    ->withServiceAccount('/app/Http/Controllers/FirebaseKey.json');

$factory = (new Factory())
    ->withDatabaseUri('https://bass-4b87d.firebaseio.com');
    }
}
