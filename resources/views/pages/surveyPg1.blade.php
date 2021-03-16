@extends('layouts.app')
@section('content')
<div class="container-lg">
    <div class="d-flex justify-content-center p-3">
        <h2> First survey page</h2>
    </div>
    <div class="d-flex justify-content-center">
{!! Form::open(['action' => 'App\Http\Controllers\Ans1Controller@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('question1', 'How many foreign countries have you visited?') }}
        <br> 
        {{ Form::radio('question1', 'opt1') }} 1
        <br>
        {{ Form::radio('question1', 'opt2') }} 2
        <br>
        {{ Form::radio('question1', 'opt3') }} 3
        <br>
        {{ Form::radio('question1', 'opt4') }} 4
        <br>
        {{ Form::radio('question1', 'opt5') }} 5 or more
    </div>
    <div class="form-group">
        {{ Form::label('question2', 'If it were for you to choose, which country would you visit?') }}
        <br> 
        {{ Form::radio('question2', 'opt1') }} USA
        <br>
        {{ Form::radio('question2', 'opt2') }} Russia
        <br>
        {{ Form::radio('question2', 'opt3') }} Japan
        <br>
        {{ Form::radio('question2', 'opt4') }} Norway
        <br>
        {{ Form::radio('question2', 'opt5') }} Poland
    </div>
    <div class="form-group">
        {{ Form::label('question3', 'Which mountain have you seen/visited') }}
        <br> 
        {{ Form::radio('question3', 'opt1') }} Mount Everest
        <br>
        {{ Form::radio('question3', 'opt2') }} K2
        <br>
        {{ Form::radio('question3', 'opt3') }} Broad Peak
        <br>
        {{ Form::radio('question3', 'opt4') }} Makalu
        <br>
        {{ Form::radio('question3', 'opt5') }} None
    </div>
    <div class="form-group">
        {{ Form::label('question4', 'How often do you travel to foreign places?') }}
        <br> 
        {{ Form::radio('question4', 'opt1') }} Very often
        <br>
        {{ Form::radio('question4', 'opt2') }} Sometimes
        <br>
        {{ Form::radio('question4', 'opt3') }} Rarely
        <br>
        {{ Form::radio('question4', 'opt4') }} When my finances let me
        <br>
        {{ Form::radio('question4', 'opt5') }} I don't
    </div>
    <div class="form-group">
        {{ Form::label('question5', 'Which one of the countries do you think is the most unsafe?') }}
        <br> 
        {{ Form::radio('question5', 'opt1') }} Mexico
        <br>
        {{ Form::radio('question5', 'opt2') }} China
        <br>
        {{ Form::radio('question5', 'opt3') }} Russia
        <br>
        {{ Form::radio('question5', 'opt4') }} Pakistan
        <br>
        {{ Form::radio('question5', 'opt5') }} Peru
    </div>
    {{ Form::submit('Next Page', ['class'=> 'btn btn-outline-dark']) }}
</div>
    
{!! Form::close() !!}
</div>
@endsection