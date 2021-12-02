<?php

error_reporting(~E_NOTICE);

function dateDifference($date_1, $date_2, $differenceFormat = '%h:%I')
{
    $dt1 = date_create($date_1);
    $dt2 = date_create($date_2);
    $interval = date_diff($dt1, $dt2);
    return $interval->format($differenceFormat);
}

function dateFormat($datetime)
{
    $a1 = date_create($datetime);
    return date_format($a1, 'H');
}

function horaToMin($entrada, $separator = ':')
{
    $hora = explode($separator, $entrada);
    return ($hora[0] * 60) + $hora[1];
}

echo '<pre>';


// $dataentrada = '2007-04-19 22:00';
// $datasaida = '2007-04-20 01:30';

// $entrada = dateFormat($dataentrada);
// $saida = dateFormat($datasaida);

// //calculo noturno ok
// if ($entrada >= 22 && $saida < 5) {
//     $noturna = dateDifference($dataentrada, $datasaida);
//     $noturnas = explode('.', round(horaToMin($noturna) / 52.5, 2));
//     $noturnas = $noturnas[0] . ':' . round(($noturnas[1] / 100) * 60);
//     echo '<hr>entrada noturno minutos = ' . round(horaToMin($noturna) / 52.5 * 60);
//     echo '<hr>entrada noturno horas = ' . $noturnas;


//     //return $diurnas;

// }



//ok
echo '<hr>'. dateDifference('2007-04-19 15:00', '2007-04-20 23:00');

// Se >= 5 e <= 22
$dataentrada = '2007-04-19 15:00';
$datasaida = '2007-04-20 23:00';

$entrada = dateFormat($dataentrada);
$saida = dateFormat($datasaida);

//calcula hora dia
if($entrada >= 5 && $entrada < 22){
    $diurnas = dateDifference($dataentrada, '2007-04-20 22:00');
    //echo '<hr>aentrada diurno= ' . $diurnas;
    //echo '<hr>entrada diurno minutos = ' . $diurnas * 60;
    echo '<hr>diurno horas = ' . $diurnas;  
}
//a) Em um período de 15:00 as 23:00, o colaborador deve receber 07:00 horas diurnas e 01:00 hora noturna.
//calcula hora noite
if($saida >= 22 ){
    $noturna = dateDifference('2007-04-20 22:00', $datasaida);
    echo '<hr>noturno horas = ' . $noturna;     
}




// //ok
// echo  '<hr>'. dateDifference('2007-04-19 19:03', '2007-04-20 06:59');

// // Se >= 5 e <= 22
// $dataentrada = '2007-04-19 19:03';
// $datasaida = '2007-04-20 06:59';

// $entrada = dateFormat($dataentrada);
// $saida = dateFormat($datasaida);

// //calcula hora dia
// if($entrada >= 5 && $entrada < 22){
//     $diurnas = dateDifference($dataentrada, '2007-04-20 22:00');
//     //echo '<hr>aentrada diurno= ' . $diurnas;
//     //echo '<hr>entrada diurno minutos = ' . $diurnas * 60;
//     echo '<hr>diurno horas = ' . $diurnas;  
// }

// if($entrada < 22 && $saida > 5 ){
//     $noturna = dateDifference('2007-04-19 22:00', '2007-04-20 05:00');
//     echo '<hr>noturno horas = ' . $noturna;     
// }

// if($saida > 4){
//     $diurnas = dateDifference('2007-04-20 05:00', $datasaida);
//     echo '<hr>diurno horas = ' . $diurnas;      
// }

// //ok

// echo  '<hr>'. dateDifference('2007-04-19 23:59', '2007-04-20 08:02');

// // Se >= 5 e <= 22
// $dataentrada = '2007-04-19 23:59';
// $datasaida = '2007-04-20 08:02';

// $entrada = dateFormat($dataentrada);
// $saida = dateFormat($datasaida);

// //calcula hora dia
// if($entrada >= 5  && $entrada < 22){
//     $diurnas = dateDifference($dataentrada, '2007-04-20 22:00');
//     //echo '<hr>aentrada diurno= ' . $diurnas;
//     //echo '<hr>entrada diurno minutos = ' . $diurnas * 60;
//     echo '<hr>diurno horas = ' . $diurnas;  
// }

// if($entrada < 22 && $saida > 5 ){
//     $noturna = dateDifference('2007-04-19 22:00', '2007-04-20 05:00');
//     echo '<hr>noturno horas = ' . $noturna;     
// }

// if($saida > 4){
//     $diurnas = dateDifference('2007-04-20 05:00', $datasaida);
//     echo '<hr>diurno horas = ' . $diurnas;      
// }

// if ($entrada >= 22 && $saida > 5) {

//      $noturnas = dateDifference($dataentrada, '2007-04-20 05:00');
//      //$noturnas = explode('.', round(horaToMin($j) / 52.5, 2));
//      //$noturnas = $noturnas[0] . ':' . round(($noturnas[1] / 100) * 60);
//      //echo '<hr>noturno minutos = ' . round(horaToMin($j) / 52.5 * 60);
//      echo '<hr>noturno horas = ' . $noturnas;
//      //return $noturnas;
// }


// function calc_horario($dataentrada, $datasaida){

//     $d = 0;
//     $n = 0;

//     $entrada = dateFormat($dataentrada);
//     $saida = dateFormat($datasaida);
   

//     if($entrada >= 5  && $entrada < 22){
//         $diurnas = dateDifference($dataentrada, '2007-04-20 22:00');
//         echo '<hr>diurno horas = ' . $diurnas;
//         $d += horaToMin($diurnas);
        
//     }
    
//     if($entrada < 22 && $saida > 5 ){
//         $noturna = dateDifference('2007-04-19 22:00', '2007-04-20 05:00');
//         echo '<hr>noturno horas = ' . $noturna;    
//         $n += horaToMin($noturna); 
//     }
    
//     if($saida > 4 && $entrada < 22){
//         $diurnas = dateDifference('2007-04-20 05:00', $datasaida);
//         echo '<hr>diurno horas = ' . $diurnas;  

//         $d += horaToMin($diurnas);    
//     }
    
//     if ($entrada >= 22 && $saida > 5) {
//          $noturnas = dateDifference($dataentrada, '2007-04-20 05:00');
//          echo '<hr>noturno horas = ' . $noturnas;
//         $n += horaToMin($noturnas);
//     }


//     return '<hr>diurno horas = ' .$diurnas . '<hr>noturno horas = ' .$noturnas;
// }

// echo '<hr>funcao';
// calc_horario('2007-04-19 15:00','2007-04-20 23:00');



//echo 22 a 5

//funcionario entrada for as 22 - 5 = 17
//datasaida - dataentrada

//22 - 23 - 5


$dataentrada = '1990-01-01 19:03';
$data = explode(' ', $dataentrada);
$entradata = $data[0].' '.$data[1]; 

$datasaida = '1990-01-02 06:59';
$data = explode(' ', $datasaida);
$entrasaida = $data[0].' '. $data[1];



$entrada = new DateTime($entradata);
$saida = new DateTime($entrasaida);

$total = $entrada->diff($saida);
var_dump($total);


if($entrada < 22){
    $diurnas = dateDifference($entradata, '2007-04-20 22:00');
    $min_diurno = horaToMin($diurnas);
    //echo '<hr>minutos diurnos = '. horaToMin($diurnas);
}

if($entrada >= 22 ){
    $diurnas = dateDifference($entradata, '2007-04-20 22:00');
    $min_diurno = horaToMin($diurnas);
    //echo '<hr>minutos diurnos = '. horaToMin($diurnas);
}


function total(){
    $dataentrada = '1990-01-01 22:03';
    $data = explode(' ', $dataentrada);
    $entradata = $data[0].' '.$data[1]; 

    $datasaida = '1990-01-02 04:59';
    $data = explode(' ', $datasaida);
    $entrasaida = $data[0].' '. $data[1];



    $entrada = new DateTime($entradata);
    $saida = new DateTime($entrasaida);
    $total = $entrada->diff($saida);
    return $total->format('%h:%I');
}

echo total();

/*

 entrada - 22 <- diurnox    
 de 22 a 0   <- noturno
 0 a 5 <- noturno
 5 a 22 <- diurno

data de entrada 22 horas - data entrada = diurnas
se o dia =  logo somo $entrada + saida = diurnas
se o dia diff e entrada for inferior a 22 horas calcula (data de entrada 22 horas - data entrada = diurnas) 
se o dia +1 saida antes das 5 (dataentrada 22 - data de saida = noturnas)
se o dia +1 saida depois das 5 (horas noturnas = 7) + horas diurnas 5 ate a saida

se dataentrada inferior a 22 horas ate as 24 
se dataentrada inferior a 5 e a 22 ($saida - periodo) 

 */


 