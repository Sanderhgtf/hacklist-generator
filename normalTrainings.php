<?php

function genNormal() {

    global $TrainerHacks;
    global $TrainerHacks2;
    global $TrainerHacks3;
    global $AssistantHacks;
    global $AssistantHacks2;
    global $AssistantHacks3;
            
    $round = 1;

    for ($i = 0; $i < 5; $i++){ //Determines the amount of rounds
        

        ##Trainer Normal
    ## 1st hack
    $random1 = rand(-1,1);
    $pos1 = random_int(0,count($TrainerHacks)-1)+$random1;
    if ($pos1 > count($TrainerHacks)-1 || $pos1 < count($TrainerHacks)-1) {
        $pos1 = $pos1 - $random1;
    }   echo "Round ". $round ." - `Trainer:` " . $TrainerHacks[$pos1];
//echo " ".$pos1; // DEBUGGING
    
    ##Trainer Normal
    ## 2nd hack
    if ($pos1 < 12){ // puts a none combat if the 1st hack is combat
        $random1b = random_int(-1,1);
        $pos1b = rand(0,count($TrainerHacks2)-1)+$random1b;
    if ($pos1b > count($TrainerHacks2)-1 || $pos1b < count($TrainerHacks2)-1) { // makes sure the hack in within the array
            $pos1b = $pos1b - $random1b;
        }	echo $TrainerHacks2[$pos1b];
    }

    if ($pos1 > 15){ // this puts any hack if the 1st hack is none combat
        $random1b = random_int(-1,1);
        $pos1b = rand(0,count($TrainerHacks3)-1)+$random1b;
    if ($pos1b > count($TrainerHacks3)-1 || $pos1b < count($TrainerHacks3)-1) { // makes sure the hack in within the array
        $pos1b = $pos1b - $random1b;
    }	echo $TrainerHacks3[$pos1b];
    }   
//echo " ".$pos1b; // DEBUGGING
    
    
        ## Assistant Normal
    ## 1st hack
    $random2 = random_int(-1,1);
    $pos2 = rand(0,count($AssistantHacks)-1)+$random2;
    if ($pos2 > count($AssistantHacks)-1 || $pos2 < count($AssistantHacks)-1) {
        $pos2 = $pos2 - $random2;
    }   echo " **|** `Assistant:` " . $AssistantHacks[$pos2];
//echo " ".$pos2; // DEBUGGING
    
    ## Assistant Normal
    ## 2nd hack
    if ($pos2 < 12){ // puts a none combat if the 1st hack is combat
        $random2b = random_int(-1,1);
        $pos2b = rand(0,count($AssistantHacks2)-1)+$random2b;
    if ($pos2b > count($AssistantHacks2)-1 || $pos2b < count($AssistantHacks2)-1) { // makes sure the hack in within the array
            $pos2b = $pos2b - $random2b;
        }	echo $AssistantHacks2[$pos2b];
    } 

    if ($pos2 > 15){ // this puts any hack if the 1st hack is none combat
        $random2b = random_int(-1,1);
        $pos2b = rand(0,count($AssistantHacks3)-1)+$random2b;
    if ($pos2b > count($AssistantHacks3)-1 || $pos2b < count($AssistantHacks3)-1) { // makes sure the hack in within the array
            $pos2b = $pos2b - $random2b;
    }	echo $AssistantHacks3[$pos2b];
    } 
//echo " ".$pos2b; // DEBUGGING

    $round ++;
    random_int(0,10);
echo "<br>";
}}
?>