@extends('layouts.app')

@section('content')
<div class="container">
    <h1>   {{ Auth::user()->name }} </h1>
    <h1>   {{ Auth::user()->id }} </h1>
    <h3>  Here are all your reviews. </h3>
    
    @foreach ($id as $usr)
       
       <li> {{$usr}} </li>
        <hr>
    @endforeach
    
</div>
@stop
