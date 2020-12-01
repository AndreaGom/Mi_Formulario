@extends('layouts.master')
@section('title','login')
@section('header')
<h1> Inicio de sesion</h1>
@parent
@stop
 @section('conte')
 
 <center> 
 <form action="{{action('PruebaController@validarLogin')}}" method="post">
 {{csrf_field()}}
 <ul>
 

     

     
    <label for="user">Usuario</label>
    <input type="text"  name="user">
  <br>
  <br>
  
    <label for="pasword">Contraseña</label>
    <input type="email"  name="password">
  
 </ul>
</form>
<br>
<li class="button">
  <button type="submit">Enviar</button>
  </li>
</center>
@stop
@section('footer')
 @parent
@stop