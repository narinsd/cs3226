<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller {
  public function index() { return view('index'); } // show index view
  public function help() { return view('help'); } // show help view
  public function detail($id) { return 'thi si dummy '+$id; }
  public function about() { return 'hello'; }
}
?> 