<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio extends Controller
{
    public function index($B=10,$b=4,$a=15){
        $ar = ($B + $b)*$a /2;
        return view('trapecio',array('B' => $B, 'b' => $b,'a' => $a ,'ar' =>$ar, 'title' => 'AREA' ));
    }
   
    public function apote($x=10){
        $apotema = $x /2;
        return view('apotema',array('x' => $x, 'd' =>$apotema,  'title' => 'el apotema'));
    }

    public function con($r=6,$a=15){
        $vol = (3.1416*($r*$r)*$a)/3; 
        return view('cono',array('r' => $r, 'a' => $a, 'v' =>$vol, 'title' => 'el volumen '));
    }

    public function are($b=6,$a=8){
        $ar =( $b *$a)/2;
        return view('atriangulo',array('b' => $b, 'a' => $a, 'ar' =>$ar, 'title' => 'area de un triangulo' ));
    }


    public function cir($r=50){
        $cir = (3.1416*(2 *$r));
        return view('circu',array('r' => $r, 'cir' =>$cir,  'title' => 'el apotema' ));
    }
   //descisiones//
    public function vot($edad = 17){
            return view('votar')
            ->with('edad',$edad)
            ->with('title','votar');

    }

    public function sue($hr = 40,$ho = 60){
        $resul= $hr * $ho;
        $resull= $hr * (2 * $ho);
            return view('suel')
            ->with('hr',$hr)
            ->with('ho',$ho)
            ->with('resull',$resull)
            ->with('resul',$resul)
            ->with('title','votar');

    }

    public function comp($dinero = 100){
                return view('compra')
            ->with('dinero',$dinero)
            ->with('title','Compras');

    }

    public function tari($calif = 7){
        return view('calif')
        ->with('calif',$calif)
        ->with('title','Calificaciones ');

    }
    
    public function bole($calif = 9){
        return view('boleta')
        ->with('calif',$calif)
        ->with('title','boleta');
    }
    //ciclos //
    public function apro($cuenta = 0,$cue = 0,$calif = 4){
     return view('aproba',['cuenta'=> $cuenta, 'cue' => $cue, 'calif' => $calif]);

    }

     public function canti( $cuenta = 0,$cue = 0,$cuen = 0,$num = 4){
        return view('cantid',['cuenta'=> $cuenta, 'cue' => $cue, 'cuen' => $cuen, 'num' => $num]);

    }
    public function regis($mon = 6,$bill = 20,$total = 0,$cuenta = 0,$cuen = 0,$num=2){
        return view('registro',['cuenta'=> $cuenta,  'cuen' => $cuen, 'num' => $num,'bill'=> $bill, 'total'=> $total, 'mon'=>$mon]);


    }
    public function ta( $i=1,$n=1,$numero = 10){
        
        return view('tabla',['i'=> $i, 'n' => $n, 'numero' => $numero]);


    }
    public function sala($salario = 1500,$mostar = "El salario anual es ",$i=0,$mostrarx2 = "El salario de 6 años es ", $as = "pesos" ){
       
        return view('salari',['salario'=> $salario, 'mostar' => $mostar, 'mostarx2' => $mostrarx2,
        'as'=> $as, 'i' => $i, 'in' => $in]);
    }
}