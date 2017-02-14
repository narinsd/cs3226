<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Faker\Factory as Faker;


class StudentController extends Controller {
  
  public $mcs = array();
   public $tcs = array();
   public $hws = array();
  public  $bss = array();
   public $kss = array();
   public $acs = array();
   public $dils = array();
    public $sums = array();


  public function index() { 
    session_start();

    global $dils,$bss, $kss, $acs, $hws, $mcs, $tcs, $sums;

 $faker = Faker::create();
 if(empty($_SESSION["data"])){
  for($j = 0; $j <52; $j++){
    
    for($i = 0; $i < 12; $i++) {
      $mcs[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }

   
    for($i = 0; $i < 12; $i++) {
      $tcs[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    
    for($i = 0; $i < 12; $i++) {
      $hws[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    
    for($i = 0; $i < 12; $i++) {
      $bss[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    
    for($i = 0; $i < 12; $i++) {
      $kss[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }

    
    for($i = 0; $i < 12; $i++) {
      $acs[$j][$i] = $faker->numberBetween($min = 0, $max = 4);
    }
  }
    $students = 52;

    $_SESSION["data"] = array($students,$mcs, $tcs, $hws, $bss, $kss, $acs, $dils, $sums);

  }

    
    
  return view('index'); } // show index view

  public function help() { return view('help'); } // show help view

  public function create() { return view('create'); } // show help view

  public function edit($id) { 
    session_start();
   
   
   $bss = $_SESSION["data"][4][$id] ;
   $kss = $_SESSION["data"][5][$id] ;
   $acs = $_SESSION["data"][6][$id] ;
   $hws = $_SESSION["data"][3][$id] ;
   $tcs = $_SESSION["data"][2][$id] ;
   $mcs = $_SESSION["data"][1][$id] ;
   $dils = $_SESSION["data"][7][$id] ;
   $sums = $_SESSION["data"][8][$id] ;
   $total = $_SESSION["data"][0][$id] ;
    //$foo = 0;
   for($i = 0;$i < 12; $i++) {
        $spe[$i] = $mcs[$i]+$tcs[$i];
      }

    $foo = array($id,$mcs,$tcs,$spe,$hws,$bss,$kss,$acs,$dils,$sums,$id,$id);
      
    return view('edit')->with('array', $foo); } // show help view

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
      return redirect('edit/{$id}') // redisplay the form
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

    session_start();
   
   
   $bss = $_SESSION["data"][4][$id] ;
   $kss = $_SESSION["data"][5][$id] ;
   $acs = $_SESSION["data"][6][$id] ;
   $hws = $_SESSION["data"][3][$id] ;
   $tcs = $_SESSION["data"][2][$id] ;
   $mcs = $_SESSION["data"][1][$id] ;
   $dils = $_SESSION["data"][7][$id] ;
   $sums = $_SESSION["data"][8][$id] ;
   $total = $_SESSION["data"][0][$id] ;

   for($i = 0; $i < 12; $i++) {
      $mcs[$total][$i] = 0;
    }

   
    for($i = 0; $i < 12; $i++) {
      $tcs[$total][$i] = 0;
    }

    
    for($i = 0; $i < 12; $i++) {
      $hws[$total][$i] = 0;
    }

    
    for($i = 0; $i < 12; $i++) {
      $bss[$total][$i] = 0;
    }

    
    for($i = 0; $i < 12; $i++) {
      $kss[$total][$i] = 0;
    }

    
    for($i = 0; $i < 12; $i++) {
      $acs[$total][$i] = 0;
    }

    $_SESSION["data"] = array($total + 1,$mcs, $tcs, $hws, $bss, $kss, $acs, $dils, $sums);



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
    session_start();
   
   
   $bss = $_SESSION["data"][4][$id] ;
   $kss = $_SESSION["data"][5][$id] ;
   $acs = $_SESSION["data"][6][$id] ;
   $hws = $_SESSION["data"][3][$id] ;
   $tcs = $_SESSION["data"][2][$id] ;
   $mcs = $_SESSION["data"][1][$id] ;
   $total = $_SESSION["data"][0];

  //for($i = 0; $i < 12; $i++) {
        $dils =  $bss[$id] + $kss[$id] + $acs[$id] +  $hws[$id];
    //  }

     
      //for($i = 0;$i < 12; $i++) {
        $sums = $mcs[$id] + $tcs[$id] + $dils[$id];
      //}
      //for($i = 0;$i < 12; $i++) {
        $spe = $mcs[$id]+$tcs[$id];
      //}
    	$foo = array($id,$mcs,$tcs,$spe,$hws,$bss,$kss,$acs,$dils,$sums,$id,$id);
       
        $_SESSION["data"][7] = $dils;
         $_SESSION["data"][8] = $sums;
    	
  	return view('detail')->with('array', $foo); }

  public function about() { return 'hello'; }
}

?> 