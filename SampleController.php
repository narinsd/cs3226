<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SampleController extends Controller {
  public function index() { return view('index'); } // show index view
  public function help() { return view('help'); } // show help view
  public function detail() { return view('detail'); }
  public function about() { return "hellow"; }
}
?> 