@extends('layouts.master')
@section('title','volumen')
@section('header')
<h1>volumen de un cono</h1>
 @parent 
 @stop 
 <br>
        @section('conte')
        <h1> 
        radio {{$r}} <br>
        altura{{$a}} <br>
       el  volumen es: {{$v}}
            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop