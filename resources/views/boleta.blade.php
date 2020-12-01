
@extends('layouts.master')
@section('title','area')
@section('header')
<h1>Calificaciones (A=10,B=9,C=8,D=7,E=6,F=5)</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        calificacion es {{$calif}}  <br>
         @if($calif ==10)
                <h3>A</h3>
            
            
        @elseif($calif ==9)
        <h3>B</h3>
        
        @elseif($calif ==8)
                <h3>C</h3>
              
       
        @elseif($calif ==7)
        <h3>D</h3>
       
        @elseif($calif ==6)
                <h3>E</h3>
        @else
        <h3>F</h3>
          @endif
        
            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop

