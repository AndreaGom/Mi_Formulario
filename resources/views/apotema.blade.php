@extends('layouts.master')
@section('title','apotema')
@section('header')
<h1>Apotema </h1>
 @parent 
 @stop 
 <br> 
 <center> 
        @section('conte')
        el apotemas de  {{$x}} es: {{$d}}  </center>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop