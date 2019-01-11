<?php


echo "<!DOCTYPE><HTML>";
echo "<HTML>";
echo "<HEAD><TITLE> PASS BY REFERENCE </TITLE></HEAD>";
echo "<BODY>";






  $min= 0;
  $max = 0;
  $avg= 0;
  $strdev =0;

  


  function calcStats(&$min, &$max, &$avg, &$strdev, $multiArray)
  {

    sort($multiArray);

    $min = min($multiArray);
    $max = max ($multiArray);
    $avg = array_sum(multiArray) / count(multiArray);
    $numE = count($multiArray);
    $strdev = 0.0;

    $avg = array_sum($multiArray)/$numE;

    foreach($multiArray as $i)
    {

  $strdev += pow(($i - $avg), 2);
    }

  
  }

  
  
  echo "<TABLE><TR><TH> Row</TH><TH> Min</TH><TH> Max</TH><TH> Avg </TH><TH> Stddev</TH></TR>";
  
  $file = fopen("../data_files/lab05_pdaley.txt", "r") or
    die("file does not exist within system, please try again");
  
  $i=0;
  
  
  while(($str = fgets($file)) !== false)
  {
    
    $i++;
    $temp = explode(',' , $str);
  
  calcStats($min, $max, $avg, $strdev, $temp);
  
  echo "<TR><TH>" . $i . "</TH>";
  echo "<TH>" . $min . "</TH>";
  echo "<TH>" . $max . "</TH>";
  echo "<TH>" . $avg . "</TH>";
  echo "<TH>" . $strdev . "</TH> </TH>";
  
  }

  fclose($file);
  
  echo "</TABLE>";
  echo "</BODY>";
  echo "</HTML>";
  

?>