@extends('layouts.master')
@section('title','area')
@section('header')
<h1>Area de un trapecio</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        edad es {{$edad}}  <br>
         @if($edad>=18)
    <h3>Puedes votar</h3>
        @else 
        <h3>No tienes la edad para votar</h3>
        @endif
            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop


