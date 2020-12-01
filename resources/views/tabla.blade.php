
@extends('layouts.master')
@section('title','tabla multiplicar')
@section('header')
<h1>multiplicacion</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

 @for($i = 1; $i <= $numero; $i++)
    {{$n}}
    x
    {{$i}}
    =
    <?php
    $sa = $n * $i;
    ?>
    {{$sa}}
<br>
    @endfor
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop