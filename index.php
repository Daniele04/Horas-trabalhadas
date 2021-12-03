<?php

function dateDiff($start,$end,$format = '%h:%I'){
  $dat1 = date_create($start);
  $dat2 = date_create($end);
  $interval = date_diff($dat1,$dat2);
  return $interval->format($format);
}

function newDate($date){
	return new DateTime($date);
}

function hoursToMinutes($hours) 
{ 
    list($hours, $minutes) = explode(':', $hours); 
    return $hours * 60 + $minutes; 
} 

function minutesToHours($minutes){
	$hours = floor($minutes/60);
	$result = $minutes%60;
	return ($hours < 10 ? '0'.$hours : $hours).':'.($result < 10 ? '0'.$result : $result) ;
}

$start= '2021-02-02 19:03';
$end = '2021-02-03 06:59';



$data = dateDiff($start,$end);


$day_min = 0;
$night_min = 0;


// Verificando horas no dia >= 
if(newDate($end)->format('d') > newDate($start)->format('d')){

  if(newDate($start)->format('H') < 22  ){
        $end2 = newDate($end)->format('Y-m-d 22:00');

        $hours_day = dateDiff($start,$end2);

        $day_min = hoursToMinutes($hours_day); 

  };

  if(newDate($end)->format('H') >= 5 ){
      $start2 = newDate($end)->format('Y-m-d 05:00');

      $hours_day = dateDiff($start2,$end);

      $day_min += hoursToMinutes($hours_day);


  };
  
  if(newDate($start)->format('H') >= 22 || newDate($start)->format('H') <= 22){
	
    $end2 = $end;
    $start2 = $start;
	if(newDate($end)->format('H') >= 5){
        $end2 = newDate($end)->format('Y-m-d 05:00');
    }
    
    
    if(newDate($start)->format('H') < 22){
   	   $start2 = newDate($start)->format('Y-m-d 22:00');
    }
    

    $hours_day = dateDiff($start2,$end2);

    $night_min += hoursToMinutes($hours_day); 


  }
  

}
//Dia == 
if(newDate($end)->format('d') == newDate($start)->format('d')){



  if(newDate($end)->format('H') > 4 && newDate($end)->format('H') <= 23){
  	  $end2 = $end;
      //$start2 = $start;
      if(newDate($end)->format('H') >= 5){
        $start2 = newDate($end)->format('Y-m-d 05:00');
      } 
      
      if(newDate($end)->format('H') >= 22){
        $end2 = newDate($end)->format('Y-m-d 22:00');
      }    
      
      $hours_day = dateDiff($start,$end2);
      $day_min = hoursToMinutes($hours_day);
  }

  if(newDate($end)->format('H') >= 22 && newDate($end)->format('H') <= 23){
  
        $start2 = newDate($start)->format('Y-m-d 22:00');
        $end2 = $end;
        if(newDate($start)->format('H') <= 4){
           $start2 = $start;
        }    

        $hours_day = dateDiff($start2,$end2);

        $night_min += hoursToMinutes($hours_day); 

 
  }

}

// echo '<hr> Minutos Dia '.$day_min;
echo '<hr> HORAS DIURNAS '.minutesToHours($day_min);
//echo '<hr> Minutos Noturnos '.$night_min;
echo '<hr> HORAS NOTURNAS '.minutesToHours($night_min);
