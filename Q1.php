<?php

$firstIndex = 0;

function findSeriesBinary($array, $B)
{
    global $firstIndex;

    $maxSeries = 0;

    $OneSerieses =[];
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

                echo "[ " ;
                for($s= 0;$s<count($arrayCopy);$s++){
                    echo " ".$arrayCopy[$s] ." ,";
                }
                echo "] <br>";
    
                echo " <br>";
    
                echo "avilNumOfConverting : ".$avilNumOfConverting."<br>";
                echo "indexConverted : ".$indexConverted."<br>";
                echo "oneISConverted :" ;
                if($oneISConverted){
                 echo "T <br>";
                } else echo "F <br>";

                echo " <br>";
                echo "----------------------------------------"."<br>";

            }
        }

        $OneSerieses [].+[
        $numOFSeries = CountSeriers($arrayCopy),
        $firInde = $firIndex
        ];

        echo " <br>";
        echo " <br>";
        echo " <br>";
        echo "numOFSeries : ".$numOFSeries."<br>";
        echo "**********************"."<br>";
        echo "maxSeries : ".$maxSeries."<br>";
        echo "**********************"."<br>";
        echo "firstIndex : ".$firstIndex."<br>";
        echo "";

        if ($numOFSeries > $maxSeries) {
            $maxSeries = $numOFSeries;
        }
        echo "**********************"."<br>";
        echo "maxSeries : ".$maxSeries."<br>";
    }

    echo "[ " ;
    for($s= $firstIndex,$counter=0;$counter<=$maxSeries;$s++,$counter++){
        echo "$s";
        if($counter != $maxSeries) echo ","; 
    }
    echo "]";
     

}


function CountSeriers($array)
{
    $numOFSeries = 0;
    $numOFSeriesISAsign = false;
    global $firstIndex;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != 0){
            if(!$numOFSeriesISAsign){
                $numOFSeriesISAsign = true;
                $firstIndex = $i;
            }
            $numOFSeries++;
        } else {
            $numOFSeriesISAsign = false;
            $numOFSeries = 0;
        }
    }

    return $numOFSeries;
}


  $A = [1,0,1,0,0,1,1,1,1];
  $B = 2;

  findSeriesBinary($A,$B);
?>
