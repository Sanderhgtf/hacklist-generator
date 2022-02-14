<?php

function genEasy() {

    global $TrainerHacks;
    global $AssistantHacks;
    global $answers;
          
    $round = 1;

    for ($i = 0; $i < 5; $i++){

    ##Trainer Easy
    ## 1st hack
    $random1 = rand(-2,2);
    $pos1 = random_int(0,count($TrainerHacks)-1)+$random1;
    if ($pos1 > count($TrainerHacks)-1 || $pos1 < count($TrainerHacks)-1) {
        $pos1 = $pos1 - $random1;
    }   echo "Round ". $round ."- `Trainer:` " . $TrainerHacks[$pos1];
    array_push($answers, $pos1);

    ## Assistant Easy
    ## 1st hack
    $random2 = random_int(-2,2);
    $pos2 = rand(0,count($AssistantHacks)-1)+$random2;
    if ($pos2 > count($AssistantHacks)-1 || $pos2 < count($AssistantHacks)-1) {
        $pos2 = $pos2 - $random2;
    }   echo " **|** `Assistant:` " . $AssistantHacks[$pos2]."<br>";
        $round++;
        array_push($answers, $pos2);
    }}
?>