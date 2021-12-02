<?php

error_reporting(~E_NOTICE);
//1 -> PHP 
//horarios diurnos e noturnos

//$horas = ($datasaida - $dat   aentrada) + ($datasaida2 - $dataentrada2);


//jornada total ok
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

echo '<pre>';

// $noturno = dateDifference('2007-04-19 23:59', '2007-04-20 08:02');
// echo '<hr>Totais minutos = '. horaToMin($noturno);
// echo '<hr>Totais horas = '. round($noturno);


function horaToMin($entrada, $separator = ':')
{
    $hora = explode($separator, $entrada);
    return ($hora[0] * 60) + $hora[1];
}

//echo horaToMin($noturno);
//echo horaToMin($noturno)/52.5;

//echo dateFormat('2007-04-19 22:00') - 22;


$dataentrada = '2007-04-19 21:00';
$datasaida = '2007-04-20 6:00';
$entrada = dateFormat($dataentrada);
$saida = dateFormat($datasaida);


//entrada diurna 
if ($entrada >= 5 && $entrada < 22) {
    echo $entrada;
    if ($saida < 22 ) { 
        $diurnas = dateDifference($dataentrada, $datasaida);
        echo '<hr>aentrada diurno= ' . $diurnas;
        echo '<hr>entrada diurno minutos = ' . $diurnas * 60;
        echo '<hr>entrada diurno horas = ' . $diurnas;
    }

    //return $diurnas;
    if ($saida >= 22) {    
        // $diurnas = abs($entrada - 22);
        $y = dateDifference($dataentrada, '2007-04-20 5:00');
        $y = horaToMin($y) / 52.5;
        $noturnas = explode('.',round(horaToMin($y)/52.5,2));
        //echo '<hr>entrada noturno minutos = ' .round(horaToMin($y)/52.5 * 60);
        echo '<hr>noturno horas = ' . $noturnas[0].':'.round(($noturnas[1]/100)*60);
        //return $diurnas;
    } 
   

} 
//calculo noturno ok
// if ($entrada >= 22 && $saida < 5) {
//     $noturna = dateDifference($dataentrada, $datasaida);
//     $noturnas = explode('.', round(horaToMin($noturna) / 52.5, 2));
//     $noturnas = $noturnas[0] . ':' . round(($noturnas[1] / 100) * 60);
//     echo '<hr>entrada noturno minutos = ' . round(horaToMin($noturna) / 52.5 * 60);
//     echo '<hr>entrada noturno horas = ' . $noturnas;


//     //return $diurnas;

// }


// if ($entrada >= 22) {    
//     // $diurnas = abs($entrada - 22);
//     $y = dateDifference($dataentrada, '2007-04-20 5:00');
//     $y = horaToMin($y) / 52.5;
//     $noturnas = explode('.',round(horaToMin($y)/52.5,2));
//     echo '<hr>entrada noturno minutos = ' .round(horaToMin($y)/52.5 * 60);
//     echo '<hr>entrada noturno horas = ' . $noturnas[0].':'.round(($noturnas[1]/100)*60);
//     //return $diurnas;
// } 

// if ($saida >= 22 || $saida < 5) {
//     //$noturno = 22 + $saida;
//     //echo $datasaida;
//     $j = dateDifference('2007-04-19 22:00', $datasaida);
//     $noturnas = explode('.', round(horaToMin($j) / 52.5, 2));
//     $noturnas = $noturnas[0] . ':' . round(($noturnas[1] / 100) * 60);
//     echo '<hr>noturno minutos = ' . round(horaToMin($j) / 52.5 * 60);
//     echo '<hr>noturno horas = ' . $noturnas;
//     //return $noturnas;
// }

// if ($saida > 5 || $saida < 22) {
//     $diurnas = dateDifference('2007-04-19 05:00', $datasaida);
//     echo '<hr>saida diurno minutos = ' .$diurnas * 60;
//     echo '<hr>saida diurno horas = ' .$diurnas;
//     //return $diurnas;
// }

// $horaIni="10:00";
// $horaFim="15:00";
// $tempo=hora2min($horaFim)-hora2min($horaIni);
// if ($tempo<0) $tempo+=1440;
// $tempo=$tempo/60;

//echo dateFormat('2007-04-19 17:00');

//echo dateFormat('2007-04-19 22:00');
//echo dateFormat('2007-04-20 01:30');
// 3:30 -> dividir por 52.5 * 60 tem dar 4 horas noturnas;

// echo "<hr> hora = ".$hora;
// echo "<hr> noturno = ".$noturno;

// echo "<hr> noturno = ".((($noturno * 60) / 52.5) * 60);
// echo "<hr> noturno = ".($noturno * 7.5);
// echo "<hr> normal = ".$normal;



// $saida = ['teste'];

// json_encode($saida);





?>

<table style="border: 1px solid black;">
    <tr>
        <th>Funcionario</th>
        <th>Data</th>
        <th>Entrada</th>
        <th>Saida</th>
        <th>Horas tralhadas</th>
        <th>Horas Diurnas</th>
        <th>Horas Noturnas</th>
    </tr>
    <tr>
        <td>teste</td>
        <td>01/12/2021</td>
        <td>10:51:00</td>
        <td>18:00:00</td>
        <td>07:09:00</td>
        <td>00:00:00</td>
    </tr>
</table>