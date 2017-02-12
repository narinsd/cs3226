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
    {!! Form::number('m1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m2', '0', ['class' => 'form-control score ','step' => '0.5']) !!}
    {!! Form::number('m3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m4', '0', ['class' => 'form-control score score','step' => '0.5']) !!}
    {!! Form::number('m5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('m9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('teamcontest', 'Team Contest Scores:', ['class' => 'control-label']) !!}
  <p id= "teamcontest"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('teamcontest1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest2', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest4', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('teamcontest9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('homework', 'Homework Scores:', ['class' => 'control-label']) !!}
  <p id= "homework"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('homework1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework2', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework4', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('homework9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('problemb', 'Problem B Scores:', ['class' => 'control-label']) !!}
  <p id= "problemb"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('problemb1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb2', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb4', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('problemb9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('kattisset', 'Kattis Set Scores:', ['class' => 'control-label']) !!}
  <p id= "kattisset"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('kattisset1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset2', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset4', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('kattisset9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
  </div>
</div>

<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('achievement', 'Achievement Scores:', ['class' => 'control-label']) !!}
  <p id= "achievement"></p>
  <div class "col-xs-2 form-group row">
    {!! Form::number('achievement1', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement2', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement3', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement4', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement5', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement6', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement7', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement8', '0', ['class' => 'form-control score','step' => '0.5']) !!}
    {!! Form::number('achievement9', '0', ['class' => 'form-control score','step' => '0.5']) !!}
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