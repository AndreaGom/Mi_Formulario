<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
    
Route::get('plantilla', function () {
    return view('plantilla');
});
Route::get('/valida', function () {
    return view('login');
});

Route::post('/valida','PruebaController@validarLogin');  


      //secuencial//

Route::get('/trapecio/{B?}/{b?}/{a?}',[
    'uses' =>'Ejercicio@index',
    'as' => 'trapecio']);

Route::get('apotema/{x?}', [
    'uses' =>'Ejercicio@apote',
    'as' => 'apotema']);

Route::get('cono/{r?}/{a?}', [
    'uses' => 'Ejercicio@con',
    'as' => 'cono']);

Route::get('atriangulo/{b?}/{a?}', [
    'uses'=> 'Ejercicio@are',
    'as'=>'atriangulo'] );

Route::get('circu/{r?}', [
    'uses'=> 'Ejercicio@cir',
    'as'=> 'circu'] );

//empiezan los decisiones//

Route::get('votar',[
    'uses' => 'Ejercicio@vot',
    'as'=> 'votar'] );

Route::get('suel', [
    'uses'=> 'Ejercicio@sue',
    'as'=> 'suel']);

Route::get('compra', [
    'uses'=> 'Ejercicio@comp',
    'as'=> 'compra']);

Route::get('calif', [
    'uses'=> 'Ejercicio@tari',
    'as'=>'calif'
]);
 Route::get('boleta',[
     'uses'=> 'Ejercicio@bole',
     'as'=> 'boleta']);



     //empiezan los ciclos//
     
     Route::get('aproba',[
        'uses'=> 'Ejercicio@apro',
        'as'=> 'aproba']);

    Route::get('cantid', [
            'uses'=> 'Ejercicio@canti',
            'as'=> 'cantid']);
             
     Route::get('registro', [
        'uses'=> 'Ejercicio@regis',
        'as'=> 'registro']);

        Route::get('tabla', [
            'uses'=> 'Ejercicio@ta',
            'as'=> 'tabla']);
        
         
     Route::get('salari', [
        'uses'=> 'Ejercicio@sala',
        'as'=> 'salari']);
     
       
        

     
