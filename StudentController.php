<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller {
  public function index() { return view('index'); } // show index view

  public function help() { return view('help'); } // show help view

  public function create() { return view('create'); } // show help view

  public function edit() { return view('edit'); } // show help view

public function editcheck(Request $request) { 
  	$validator = Validator::make($request->all(), [ // as simple as this
      'nickname' => 'required|min:5|max:30',
      'name' => 'required|min:5|max:30',
      'kattis' => 'required|min:5|max:30',
      'country' => 'required',
      "m1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "m9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

      "teamcontest1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "teamcontest9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

      "homework1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "homework9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

      "problemb1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "problemb9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

      "kattisset1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "kattisset9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

      "achievement1" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement2" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement3" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement4" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement5" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement6" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement7" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement8" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',
      "achievement9" => 'numeric|min:0|max:4|required|in:0,0.5,1.0,1.5,2.0,2.5,3.0,3.5,4.0',

    ]);
    if ($validator->fails()) {
      return redirect('edit') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
    }
  	return view('index'); } 

  public function check(Request $request) { 
  	$validator = Validator::make($request->all(), [ // as simple as this
      'nickname' => 'required|min:5|max:30',
      'name' => 'required|min:5|max:30',
      'kattis' => 'required|min:5|max:30',
      'country' => 'required',
    ]);
    if ($validator->fails()) {
      return redirect('create') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
    }
  	return view('index'); } 

  // $names = array();
  // for($i = 0; $i < 50; $i++) {
  //   $names[$i] = $faker->unique()->firstName($gender = null|'male'|'female');
  // }


  // $id = array();
  // for($i = 0; $i < 50;$i++) {
  //   $id[$i] = $faker->unique()->numberBetween($min = 0, $max = 49);
  // }
  public function detail($id) { 
    $mcs = array();
    for($i = 0; $i < 52; $i++) {
      $mcs[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $tcs = array();
    for($i = 0; $i < 52; $i++) {
      $tcs[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $hws = array();
    for($i = 0; $i < 52; $i++) {
      $hws[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $bss = array();
    for($i = 0; $i < 52; $i++) {
      $bss[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $kss = array();
    for($i = 0; $i < 52; $i++) {
      $kss[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $acs = array();
    for($i = 0; $i < 52; $i++) {
      $acs[$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    $dils = array();
    for($i = 0; $i < 52; $i++) {
      $dils[$id] = $hws[$id] + $bss[$id] + $kss[$id] + $acs[$id];
    }

    $sums = array();
    for($i = 0;$i < 52; $i++) {
      $sums[$id] = $mcs[$id] + $tcs[$id] + $dils[$id];
    }

  	$foo = array($id,$mcs[$id],$tcs[$id],($mcs[$id]+$tcs[$id]),$hws[$id],$bss[$id],$kss[$id],$acs[$id],$dils[$id],$sums[$id],$id,$id);
  	$boo = array($id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id);
  	return view('detail')->with('array',$array=array( $id, $foo,$boo)); }

  public function about() { return 'hello'; }
}

?> 