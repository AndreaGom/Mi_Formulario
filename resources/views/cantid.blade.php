
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
            if ($num > 0) {
                 $cuenta += 1;
         } elseif ($num ==0){

        
         $cuen +=1;
            } else {
              $cue += 1;
            }
            }
            print "<p> mayor a cero $cuenta .</p>\n";
            print "menor a cero $cue ";
            print "igual a cero $cuen ";
            ?>
        
            </h1>

        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop