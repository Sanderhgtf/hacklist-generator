<?php

include 'normalTrainings.php';
include 'easyTrainings.php';
include 'results.php';


// dictates the code for the training.
if(isset($_POST['easy'])){
	$diff = $_POST['easy'];
	if($diff == null){
		$diff = 0;
	}
	echo $diff;
}else{
	$diff = 0;
	echo $diff;
}


if(isset($_POST['TWJ'])){
	$TWJ = $_POST['TWJ'];
	if($TWJ == null){
		$TWJ = 0;
	}
	echo $TWJ;
}else{
	$TWJ = 0;
	echo $TWJ;
}


if(isset($_POST['AWJ'])){
	$AWJ = $_POST['AWJ'];
	if($AWJ == null){
		$AWJ = 0;
	}
	echo $AWJ;
}else{
	$AWJ = 0;
	echo $AWJ;
}

	$answers = array();

	$wolfHacks = [ // Base hacks of wolfram, contains all
		'Clickaimbot','Clickaura','Triggerbot','Forcefield','killaura','Forcefield',
		'Clickaimbot','Killaura','Triggerbot','Killaura','killaura','Clickaura',
		'Legit','Legit','Legit','Legit',
		'Spider','Step','Fastladder',
		'Speed','Noslowdown','Fasteat','Fastfall','Timer',
		'Antikb','Blink','Jesus','Nofall','criticals',];

		$wolfHacks2 = [ // Secundary hacks of wolfram, doesn't contain combat/legit
			', Spider',', Fastladder',', Step',
			', Speed',', Noslowdown',', Timer',', Fasteat',', Fastfall',
			', Antikb',', Blink',', Jesus',', Nofall',];

			$wolfHacks3 = [ // Secundary hacks of wolfram, doesn't contain combat/legit
				', Clickaimbot',', Clickaura',' Triggerbot',', Forcefield',', killaura',', Forcefield',
				', Clickaimbot',', Killaura',', Triggerbot',', Killaura',', killaura',', Clickaura',
				', Clickaimbot',', Killaura',', Triggerbot',', Killaura',', killaura',', Clickaura',
				' FILLER',' FILLER',' FILLER',' FILLER',
				', Spider',', Fastladder',', Step',
				', Speed',', Noslowdown',', Timer',', Fasteat',', Fastfall',
				', Antikb',', Blink',', Jesus',', Nofall',];

	$jigHacks = [ // Base hacks of jigsaw, contains all
		'Triggerbot','Reach','killaura','Triggerbot','triggerbot','killaura',
		'Triggerbot','killaura','killaura','killaura','Reach','killaura',
		'Legit','Legit','Legit','Legit',
		'Spider','Step','Antifire',
		'Speed','Noslowdown','Fasteat','Bunnyhop','Timer',
		'Antikb','Blink','Jesus','Nofall','criticals',];

		$jigHacks2 = [ // doesn't contain combat/legit
			', Spider',', Bunnyhop',', Step',', Antifire',
			', Speed',', Noslowdown',', Timer',', Fasteat',
			', Antikb',', Blink',', Jesus',', Nofall',];

			$jigHacks3 = [ // only contains combat
				', Triggerbot',', Reach',', killaura',', Triggerbot',', triggerbot',', killaura',
				', Triggerbot',', killaura',', killaura',', killaura',', Reach',', killaura',
				', Triggerbot',', killaura',', killaura',', killaura',', Reach',', killaura',
				' FILLER',' FILLER',' FILLER',' FILLER',
				', Spider',', Bunnyhop',', Step',', Antifire',
				', Speed',', Noslowdown',', Timer',', Fasteat',
				', Antikb',', Blink',', Jesus',', Nofall',];
?>
<!DOCTYPE html> 
<html> 
<head> 
<link rel="stylesheet" href="css.css">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> 
</head> <br>
	<?php
	
	if($TWJ == 0 && $AWJ == 0 && $diff == 0) { // [easy] PHP side of the buttons that dictate difficulty / clients 
		$TrainerHacks = $wolfHacks;
		$AssistantHacks = $wolfHacks;
		genEasy(); }

		if($TWJ == 0 && $AWJ == 1 && $diff == 0) {
			$TrainerHacks = $wolfHacks;
			$AssistantHacks = $jigHacks;
			genEasy(); }

			if($TWJ == 1 && $AWJ == 1 && $diff == 0) {
				$TrainerHacks = $jigHacks;
				$AssistantHacks = $jigHacks;
				genEasy(); }

				if($TWJ == 1 && $AWJ == 0 && $diff == 0) {
					$TrainerHacks = $jigHacks;
					$AssistantHacks = $wolfHacks;
					genEasy(); }
					
	
	

	if($TWJ == 0 && $AWJ == 0 && $diff == 1) { // [normal] PHP side of the buttons that dictate difficulty / clients 
		$TrainerHacks = $wolfHacks;
		$TrainerHacks2 = $wolfHacks2;
		$TrainerHacks3 = $wolfHacks3;
		$AssistantHacks = $wolfHacks;
		$AssistantHacks2 = $wolfHacks2;
		$AssistantHacks3 = $wolfHacks3;
		genNormal(); }

		if($TWJ == 0 && $AWJ == 1 && $diff == 1) {
			$TrainerHacks = $wolfHacks;
			$TrainerHacks2 = $wolfHacks2;
			$TrainerHacks3 = $wolfHacks3;
			$AssistantHacks = $jigHacks;
			$AssistantHacks2 = $jigHacks2;
			$AssistantHacks3 = $jigHacks3;
			genNormal(); }

			if($TWJ == 1 && $AWJ == 1 && $diff == 1) {
				$TrainerHacks = $jigHacks;
				$TrainerHacks2 = $jigHacks2;
				$TrainerHacks3 = $jigHacks3;
				$AssistantHacks = $jigHacks;
				$AssistantHacks2 = $jigHacks2;
				$AssistantHacks3 = $jigHacks3;
				genNormal(); }

				if($TWJ == 1 && $AWJ == 0 && $diff == 1) {
					$TrainerHacks = $jigHacks;
					$TrainerHacks2 = $jigHacks2;
					$TrainerHacks3 = $jigHacks3;
					$AssistantHacks = $wolfHacks;
					$AssistantHacks2 = $wolfHacks2;
					$AssistantHacks3 = $wolfHacks3;
					genNormal(); } 



		?> 
		
		<br>

	<form method="post">
				<div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="easy" id="easy">
                <label class="form-check-label" for="flexCheckDefault">
                  Eeasy/Normal
                        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="TWJ" id="TWJ">
                <label class="form-check-label" for="flexCheckDefault">
                  Trainer W/J
                        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="AWJ" id="AWJ">
                <label class="form-check-label" for="flexCheckDefault">
                  Assistant W/J
                        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
		</form> 

<body>

</body>
</html> 