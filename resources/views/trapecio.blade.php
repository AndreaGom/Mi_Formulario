@extends('layouts.master')
@section('title','area')
@section('header')
<h1>Area de un trapecio</h1>
 @parent 
 @stop 
 <br>
        @section('conte')
        <h1> 
        base mayor {{$B}}  <br>
         base menor {{$b}} <br>
         altura  {{$a}} <br>
         el area es {{$ar}}

            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop