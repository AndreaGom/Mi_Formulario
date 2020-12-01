
 @extends('layouts.master')
@section('title','salario')
@section('header')
<h1>Salario</h1>
 @parent 
 @stop 
 <br>
        @section('conte')
<h1>

                        @while($i <= 10)
                        
                        {{$mostar}}
                        <?php
                        $uno = $salario;
                        $in = ($salario * 0.10);
 $salario = ($salario + $in);
                        $i++;
                        ?>
                        {{$uno}}
                        {{$as}}
                        <br>
                        <br>
                        @endwhile
                        <?php
                        $total = $mostrarx2  $uno  $as;
                        ?>
                        {{$total}}
                            
        

            </h1>

        @parent 
        @stop
        
            @section('footer')
            @parent
            @stop
