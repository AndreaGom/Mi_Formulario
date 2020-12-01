@extends('layouts.master')
@section('title','Tarifas')
@section('header')
<h1>Tarifas de estacionamiento</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        El dinero que tienes es: {{$dinero}}  <br>
        @if($hr == 2)
       $to= $hr * 5;
                   <h3> $to pesos</h3> 
        @elseif ($hr => 3) 
        $tot = $hr * 3;
                      <h3>$tot pesos</h3>
       @elseif ($hr =>10)
       $tota = $hr * 2;
            <h3>$tota pesos/h3>
         @else 
            <h3>ingrese un numero correcto</h3>
            @endif
            $total = $to + $tot + $tota;
            {{$total}}
            </h1>
        @parent 
        @stop
            @section('footer')
            @parent
            @stop
