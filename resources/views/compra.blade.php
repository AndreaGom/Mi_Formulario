
 @extends('layouts.master')
@section('title','ideas de Compra')
@section('header')
<h1>Opciones para comprar un regalo </h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        El dinero que tienes es: {{$dinero}}  <br>
        @if($dinero <= 10)
                   <h3> Puedes comprarle una tarejta</h3> 
        @elseif ($dinero <= 100) 
                      <h3>Puedes comprarle chocolates</h3>
       @elseif ($dinero <= 250)
            <h3>Comprale flores</h3>
         @else 
            <h3>comprale joyas</h3>
            @endif
            </h1>
        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop