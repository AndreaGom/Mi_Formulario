@extends('layouts.master')
@section('title','resta')
@section('header')
<h1>multiplicacion</h1>
 @parent 
 @stop 
 <br>
        @section('conte')
        <h1> 
        la resta del numero  {{$x}} y el numero {{$y}} es de: {{$d}}
            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop