@extends('layouts.master')
@section('title','Calificaciones')
@section('header')
<h1>Calificciones</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        tu calificacion es: {{$calif}}
        @if($calif == 10)
   <h3> Tienes una A</h3> 
     @elseif ($calif == 9) 
         <h3>Tienes una B</h3>
        @elseif ($calif <= 7)
            <h3>Tienes una C</h3>
         @elseif($calif <= 5) 
            <h3>Tienes una F</h3>
            @else
            <h3>Ingresa una calificaion del (1-10) </h3>
            @endif
        
            </h1>

        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop
