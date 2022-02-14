<?php

include 'normalTrainings.php';
include 'easyTrainings.php';
include 'results.php';

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
</head> <br>
	<?php
	if(isset($_POST['Easy1'])) { // [easy] PHP side of the buttons that dictate difficulty / clients 
		$TrainerHacks = $wolfHacks;
		$AssistantHacks = $wolfHacks;
		genEasy(); }

		if(isset($_POST['Easy2'])) {
			$TrainerHacks = $wolfHacks;
			$AssistantHacks = $jigHacks;
			genEasy(); }

			if(isset($_POST['Easy3'])) {
				$TrainerHacks = $jigHacks;
				$AssistantHacks = $jigHacks;
				genEasy(); }

				if(isset($_POST['Easy4'])) {
					$TrainerHacks = $jigHacks;
					$AssistantHacks = $wolfHacks;
					genEasy(); }
					
	if(isset($_POST['Normal1'])) { // [normal] PHP side of the buttons that dictate difficulty / clients 
		$TrainerHacks = $wolfHacks;
		$TrainerHacks2 = $wolfHacks2;
		$TrainerHacks3 = $wolfHacks3;
		$AssistantHacks = $wolfHacks;
		$AssistantHacks2 = $wolfHacks2;
		$AssistantHacks3 = $wolfHacks3;
		genNormal(); }

		if(isset($_POST['Normal2'])) {
			$TrainerHacks = $wolfHacks;
			$TrainerHacks2 = $wolfHacks2;
			$TrainerHacks3 = $wolfHacks3;
			$AssistantHacks = $jigHacks;
			$AssistantHacks2 = $jigHacks2;
			$AssistantHacks3 = $jigHacks3;
			genNormal(); }

			if(isset($_POST['Normal3'])) {
				$TrainerHacks = $jigHacks;
				$TrainerHacks2 = $jigHacks2;
				$TrainerHacks3 = $jigHacks3;
				$AssistantHacks = $jigHacks;
				$AssistantHacks2 = $jigHacks2;
				$AssistantHacks3 = $jigHacks3;
				genNormal(); }

				if(isset($_POST['Normal4'])) {
					$TrainerHacks = $jigHacks;
					$TrainerHacks2 = $jigHacks2;
					$TrainerHacks3 = $jigHacks3;
					$AssistantHacks = $wolfHacks;
					$AssistantHacks2 = $wolfHacks2;
					$AssistantHacks3 = $wolfHacks3;
					genNormal(); } 
		?> 
		
		<br>

	<form method="post"> <!-- HTML side of the Buttons that dictate difficulty / clients -->

		<input type="submit" style="background-color:#58CD50" name="Easy1" value="Easy   W/W "/>
		<input type="submit" style="background-color:#DB881B" name="Easy2" value="Easy   W/J "/>
		<input type="submit" style="background-color:#DB1B1B" name="Easy3" value="Easy   J/J "/>
		<input type="submit" style="background-color:#DB881B" name="Easy4" value="Easy   J/W "/>
			<br>
		<input type="submit" style="background-color:#58CD50" name="Normal1" value="Normal W/W"/>
		<input type="submit" style="background-color:#DB881B" name="Normal2" value="Normal W/J"/>
		<input type="submit" style="background-color:#DB1B1B" name="Normal3" value="Normal J/J"/>
		<input type="submit" style="background-color:#DB881B" name="Normal4" value="Normal J/W"/>
		
		</form> 

<body>
	<table> <!-- Fields in which you'll put the trials their answers to be calculated automaticaly -->
		<tr>
		<td><input type="text" size="8" name="ansTra1a"></td>
		<td><input type="text" size="8" name="ansTra1b"></td>
		</tr> <tr>
			<td><input type="text" size="8" name="ansTra2a"></td>
			<td><input type="text" size="8" name="ansTra2b"></td>
			</tr> <tr>
				<td><input type="text" size="8" name="ansTra3a"></td>
				<td><input type="text" size="8" name="ansTra3b"></td>
				</tr> <tr>
					<td><input type="text" size="8" name="ansTra4a"></td>
					<td><input type="text" size="8" name="ansTra4b"></td>
					</tr> <tr>
						<td><input type="text" size="8" name="ansTra5a"></td>
						<td><input type="text" size="8" name="ansTra5b"></td>
						</tr> 
		</table>

</body>
</html> 