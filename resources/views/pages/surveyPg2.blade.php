@extends('layouts.app')
@section('content')
<div class="container-lg">
    <h2> Second survey page</h2>
{!! Form::open(['action' => 'App\Http\Controllers\Ans2Controller@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('question6', 'Which transport do you use most often?') }}
        <br> 
        {{ Form::radio('question6', 'opt1') }} A car
        <br>
        {{ Form::radio('question6', 'opt2') }} Train
        <br>
        {{ Form::radio('question6', 'opt3') }} Planes
        <br>
        {{ Form::radio('question6', 'opt4') }} Metro
        <br>
        {{ Form::radio('question6', 'opt5') }} Bicycle
    </div>
    <div class="form-group">
        {{ Form::label('question7', 'How many accidents have you had while travelling?') }}
        <br> 
        {{ Form::radio('question7', 'opt1') }} 1
        <br>
        {{ Form::radio('question7', 'opt2') }} 2
        <br>
        {{ Form::radio('question7', 'opt3') }} 3
        <br>
        {{ Form::radio('question7', 'opt4') }} 4
        <br>
        {{ Form::radio('question7', 'opt5') }} 5 or more
    </div>
    <div class="form-group">
        {{ Form::label('question8', 'Which continent are you planning on visiting>') }}
        <br> 
        {{ Form::radio('question8', 'opt1') }} North America
        <br>
        {{ Form::radio('question8', 'opt2') }} Asia
        <br>
        {{ Form::radio('question8', 'opt3') }} South America
        <br>
        {{ Form::radio('question8', 'opt4') }} Europe
        <br>
        {{ Form::radio('question8', 'opt5') }} Australia
    </div>
    <div class="form-group">
        {{ Form::label('question9', 'Who do you travel with most often?') }}
        <br> 
        {{ Form::radio('question9', 'opt1') }} Parents
        <br>
        {{ Form::radio('question9', 'opt2') }} Friends
        <br>
        {{ Form::radio('question9', 'opt3') }} Spouse
        <br>
        {{ Form::radio('question9', 'opt4') }} Groups
        <br>
        {{ Form::radio('question9', 'opt5') }} Alone
    </div>
    <div class="form-group">
        {{ Form::label('question10', 'How long do you like vacations to be?') }}
        <br> 
        {{ Form::radio('question10', 'opt1') }} 1 day
        <br>
        {{ Form::radio('question10', 'opt2') }} 2 days
        <br>
        {{ Form::radio('question10', 'opt3') }} 3 days
        <br>
        {{ Form::radio('question10', 'opt4') }} 1 week
        <br>
        {{ Form::radio('question10', 'opt5') }} 1 month or more
    </div>
    
    {{ Form::submit('Summary', ['class'=> 'btn btn-primary']) }}
{!! Form::close() !!}
</div>
@endsection