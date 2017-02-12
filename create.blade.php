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
<h3> Create new student form</h3>
<div></div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('nickname', 'Nickname:', ['class' => 'control-label']) !!}
  <p id= "nickname"></p>
  {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('name', 'Full Name:', ['class' => 'control-label']) !!}
  <p id= "name"></p>
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group"> {{-- Group related form components together --}}
  {!! Form::label('kattis', 'Kattis:', ['class' => 'control-label']) !!}
  <p id= "kattis"></p>
  {!! Form::text('kattis', null, ['class' => 'form-control']) !!}
</div>
<div class="dropdown">
  {!! Form::label('country', 'What is your country:', ['class' => 'control-label']) !!}
  <p id= "country"></p>
  {!! Form::select('country', array('singapore' => 'Singapore', 'chinese' => 'Chinese', 'vietnam' => 'Vietnam', 'indonesian'=>'Indonesian', 'other' => 'Other')); !!}
 
</div>
<div></div>
<div class="form-group"> {{-- Don't forget to create a submit button --}}
  {!! Form::submit('Submit', ['class' => 'form-control']) !!}
</div>



{!! Form::close() !!}

@stop