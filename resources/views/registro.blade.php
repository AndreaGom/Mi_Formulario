@extends('layouts.master')
@section('title','Cantidad de ceros')
@section('header')
<h1>Cantidades</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        <?php
            print "<p>Comienzo</p>\n";
           
            for ($i = 0; $i < 6; $i++) {
            if ($mon <= 10) {

                 $cuenta = $mon * 5 ;
                } elseif ($bill => 20 ){

        
                    $cuen =  $bill * 20; 
            } else {
              
            }
            }
            $total= $cuen + $cuen 
            print "<p> billetes  $cuen pesos.</p>\n";
            print "<p> mon  $cuenta pesos.</p>\n";
            print "<p> total   $total pesos.</p>\n";
            ?>
        
            </h1>

        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop