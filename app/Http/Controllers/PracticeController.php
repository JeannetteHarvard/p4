<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Faker\Factory as Faker;

class PracticeController extends Controller
{
  public function index()
  {
    $faker = Faker::create();

    $sbus = array('FS', 'Cloud Infra', 'BSv', 'Apps One', 'Apps Two', 'Sogeti');

    echo $sbus[array_rand($sbus)];
    echo '<br>';
    // generate data by accessing properties
    echo $faker->name;
    echo '<br>+1-416-710-1505';
    return null;
  }
}
