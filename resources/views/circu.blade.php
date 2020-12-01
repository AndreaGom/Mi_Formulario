@extends('layouts.master')
@section('title','ciircunferencia')
@section('header')
<h1>calcular la circunferencia </h1>
 @parent 
 @stop 
 <br> 
 <center> 
        @section('conte')
        <h2>
        radio {{$r}} <br>
         la circunferencia es: {{$cir}}  </h2>
          </center>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop