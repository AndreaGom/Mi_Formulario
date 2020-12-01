programa para determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, 
considerando que después de las 40 horas cada hora se considera como excedente y se paga el doble.


@extends('layouts.master')
@section('title','sueldo semanal')
@section('header')
<h1>multiplicacion</h1>
 @parent 
 @stop 
 <br>
       
 @section('conte')

<h1> 
las horas trabajadoas son {{$hr}}  <br>
 @if($hr > 40)
 el pago es: {{$resul}} pesos
@else 
 el pago es: {{$resull}} pesos

@endif
    </h1>
@parent 
@stop

    @section('footer')
    @parent
    @stop

