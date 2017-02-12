<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller {
  public function index() { return view('index'); } // show index view
  public function help() { return view('help'); } // show help view
  public function detail($id) { 
  	 $foo = array($id,$id*2,$id*3,$id*4,$id*5,$id*6,$id*7,$id*8,$id*9,$id,$id,$id);
  	$boo = array($id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id);
  	return view('detail')->with('array',$array=array( $id, $foo,$boo)); }
  public function about() { return 'hello'; }
}
?> 