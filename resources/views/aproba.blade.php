
@extends('layouts.master')
@section('title','Calificaciones 3.4')
@section('header')
<h1>Calificciones</h1>
 @parent 
 @stop 
 <br>
        @section('conte')

        <h1> 
        <?php
            print "<p>Comienzo</p>\n";
           
            for ($i = 0; $i < 6; $i++) {
            if ($calif >= 6) {
            $cuenta += 1;
            } else {
            $cue += 1;
            }
            }
            print "<p> aprobado $cuenta .</p>\n";
            print "reprobado $cue ";
            ?>
        
            </h1>

        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop



            