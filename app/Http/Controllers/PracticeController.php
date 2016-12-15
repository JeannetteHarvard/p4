<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Faker\Factory as Faker;

class PracticeController extends Controller
{
  public function index()
  {
    $faker = Faker::create();

    // generate data by accessing properties
    echo $faker->name;
    return null;
  }
}
