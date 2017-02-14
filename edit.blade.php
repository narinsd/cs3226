@extends('template') <!-- use template from previous slide -->
@section('main') <!-- define a section called main -->

{{-- test.blade.php --}}
{!! Form::open() !!} {{-- Blade shortcut for creating HTML5 form --}}

@if (count($errors) > 0) {{-- just list down all errors found --}}

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<h3> Edit student form</h3>
<div></div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('nickname', 'Nickname:', ['class' => 'control-label']) !!}
  <p id= "nickname"></p>
  {!! Form::text('nickname', 'narin', ['class' => 'form-control']) !!}
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('name', 'Full Name:', ['class' => 'control-label']) !!}
  <p id= "name"></p>
  {!! Form::text('name', 'narinderpal', ['class' => 'form-control']) !!}
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('kattis', 'Kattis:', ['class' => 'control-label']) !!}
  <p id= "kattis"></p>
  {!! Form::text('kattis', 'blah blah blah', ['class' => 'form-control']) !!}
</div>
<div class="dropdown">
  {!! Form::label('country', 'What is your country:', ['class' => 'control-label']) !!}
  <p id= "country"></p>
  {!! Form::select('country', array('singapore' => 'Singapore', 'chinese' => 'Chinese', 'vietnam' => 'Vietnam', 'indonesian'=>'Indonesian', 'other' => 'Other')); !!}
 
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('minicontest', 'Mini Contest Scores:', ['class' => 'control-label']) !!}
  <p id= "minicontest"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('m1',  floatval($array[1][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m2', floatval($array[1][1]), ['class' => 'form-control score ','step' => '0.5']) !!}
    {!! Form::number('m3', floatval($array[1][2]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m4', floatval($array[1][3]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m5', floatval($array[1][4]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m6', floatval($array[1][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m7', floatval($array[1][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m8', floatval($array[1][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m9', floatval($array[1][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('teamcontest', 'Team Contest Scores:', ['class' => 'control-label']) !!}
  <p id= "teamcontest"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('teamcontest1', floatval($array[2][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest2', floatval($array[2][1]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest3', floatval($array[2][2]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest4', floatval($array[2][3]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest5', floatval($array[2][4]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest6', floatval($array[2][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest7', floatval($array[2][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest8', floatval($array[2][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest9', floatval($array[2][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('homework', 'Homework Scores:', ['class' => 'control-label']) !!}
  <p id= "homework"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('homework1', floatval($array[4][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework2', floatval($array[4][1]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework3', floatval($array[4][2]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework4', floatval($array[4][3]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework5', floatval($array[4][4]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework6', floatval($array[4][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework7', floatval($array[4][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework8', floatval($array[4][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework9', floatval($array[4][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('problemb', 'Problem B Scores:', ['class' => 'control-label']) !!}
  <p id= "problemb"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('problemb1', floatval($array[5][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb2', floatval($array[5][1]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb3', floatval($array[5][2]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb4',floatval($array[5][3]) , ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb5',floatval($array[5][4]) , ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb6', floatval($array[5][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb7', floatval($array[5][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb8', floatval($array[5][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb9', floatval($array[5][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('kattisset', 'Kattis Set Scores:', ['class' => 'control-label']) !!}
  <p id= "kattisset"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('kattisset1', floatval($array[6][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset2', floatval($array[6][1]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset3',floatval($array[6][2]) , ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset4',floatval($array[6][3]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset5', floatval($array[6][4]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset6', floatval($array[6][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset7', floatval($array[6][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset8', floatval($array[6][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset9', floatval($array[6][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('achievement', 'Achievement Scores:', ['class' => 'control-label']) !!}
  <p id= "achievement"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('achievement1', floatval($array[7][0]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement2', floatval($array[7][1]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement3', floatval($array[7][2]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement4', floatval($array[7][3]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement5', floatval($array[7][4]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement6', floatval($array[7][5]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement7', floatval($array[7][6]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement8', floatval($array[7][7]), ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement9', floatval($array[7][8]), ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>
<div></div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('Sum', 'Score Sum:', ['class' => 'control-label']) !!}
  <p id= "sum"></p>
  

</div>
<div class="form-group"> {{-- Don't forget to create a submit button --}}
  {!! Form::submit('Update', ['class' => 'form-control']) !!}
</div>

<script >
var test1 = 0.0;
$(".score").each(function(){
    test1 += parseFloat($(this).val());
});
document.getElementById("sum").innerHTML = test1;
$(".score").change(function() {
  var test1 = 0.0;
$(".score").each(function(){
    test1 += parseFloat($(this).val());
});
document.getElementById("sum").innerHTML = test1;
});
</script>

{!! Form::close() !!}

@stop