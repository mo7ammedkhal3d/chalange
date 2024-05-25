<?php

$newIndex = 0;
$firstIndex = 0;

function findSeriesBinary($array, $B)
{
    global $newIndex;
    global $firstIndex;

    $maxSeries = 0;
    $indexConverted = -1;
    $oneISConverted = false;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != 0 && $array[$i] != 1) {
            echo 'Here some input Error the array contain some unbinary digit';
            break;
        }
    }

    for ($j = 0; $j < count($array); $j++) {

        $arrayCopy = $array;
        $oneISConverted = false;
        $avilNumOfConverting = $B;
        for ($i = 0; $i < count($arrayCopy); $i++) {
            if ($arrayCopy[$i] == 0) {
                if($i == $indexConverted) {
                    continue;
                }
                if(!$oneISConverted){
                    $oneISConverted = true;
                    $indexConverted = $i;
                }
                if ($avilNumOfConverting == 0) {
                    break;
                }
                $avilNumOfConverting--;
                $arrayCopy[$i] = 1;
            }
        }

        $numOFSeries = CountSeriers($arrayCopy);

        if ($numOFSeries > $maxSeries) {
            $maxSeries = $numOFSeries;
            $firstIndex = $newIndex;
        } 
    }

    echo "[ " ;
    for($s= $firstIndex,$counter=0;$counter<$maxSeries;$s++,$counter++){
        echo "$s";
        if($counter != $maxSeries -1) echo ","; 
    }
    echo "]";
     
}


function CountSeriers($array)
{
    $numOFSeries = 0;
    $numOFSeriesISAsign = false;
    global $newIndex;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != 0){
            if(!$numOFSeriesISAsign){
                $numOFSeriesISAsign = true;
                $newIndex = $i;
            }
            $numOFSeries++;
        } else {
            $numOFSeriesISAsign = false;
            $numOFSeries = 0;
        }
    }

    return $numOFSeries;
}


  $A = [1,0,1,0,0,1,1,1,1,1,0,0];
  $B = 2;

  findSeriesBinary($A,$B);
?>
