<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
    <title>Php Quiz</title>
</head>
<body>

<div class="content">

<form action="Index.php" method="post">  
<h1>Quiz South Africa</h1>
<?php
	$total = 0;

$Quiz = array
(
array('question'=>"1. How many colours are in the SA flag?",
'8','4','5','6'),
array('question'=>"2. What is reflected on the currency notes?",
'SA Monument','Sub Saharan Indeginous People','The Big Five','National Symbol'),
array('question'=>"3. What is the national animal of SA?",
'Rhinoceros','Lion','Springbok','Elephant'),
array('question'=>"4. How many languages are there in the SA National Anthem?",
'5','4','2','1'),
array('question'=>"5. According to the census held in SA in 2001, what percentage of SA's 47 million population resides in KwaZulu Natal?",
'25%','11%','20%','15%'),
array('question'=>"6. What is SA's largest Airport?",
'Johannesburg International Airport','Mandela International Airport','Mkambati International Airport','OR Tambo International Airport'),
array('question'=>"7. When did SA become a Republic?",
'1994','1961','1948','1976'),
array('question'=>"8. What was adopted in SA on 8th May",
'New SA Flag','Bill of Rights','New Constitution','National Anthem'),
array('question'=>"9. The Witwatersrand ridge in SA has produced what percentage of all gold ever mined on earth?",
'11%','25%','40%','55%'),
array('question'=>"10. Who discovered the 1st diamond in SA in 1867?",
'Frederick Potgieter','Paul Kruger','Erasmus Jacobs','Johannes Blignaut'),
array('question'=>"11. Which is the only South African Super 14 Rugby team to ever win a Super 14 title?",
'The Bulls','The Lions','The Sharks','The Stormers'),
array('question'=>"12. What is the national floral emblem of SA?",
'Protea','Jacaranda flower','Rose','Barberton Daisy'),
array('question'=>"13. Who was the first black president of South Africa?",'Nelson Mandela','Jacob Zuma',
'Thabo Mbeki','Julius Malema'),
array('question'=>"14. Which SA born actress won an Academy award for her role in the 2003 movie 'Monster'?",
'Charlize Theron','Brumilda van Rensburg','Candice Hillebrand','Sandra Prinsloo'),
array('question'=>"15. SA divides is govermental powers in among three capitals. Which one of the following is the Judicial Capital of SA?",
'Bloemfontein','Cape Town','Pretoria','Durban'),
array('question'=>"16. How many official languages does SA have?",
'13','11','9','17'),
array('question'=>"17. Who was the first South African in space?",
'Brett Shuttleworth','Mark Shuttleworth','Michael Shuttleworth','Tim Shuttleworth'),
array('question'=>"18. Which SA boxing great became the first SA World Heavyweight Champion on 23 September 1983 when he knocked out Michael Dokes?",
'Kallie Knoetze','Gerrie Coetzee','Mike Schutte','Jimmy Abbot'),
array('question'=>"19. Everybody loves a potjie in South Africa. What is a 'potjie'?",
'Pig liver with onions','Type of Stew','A caserole dish made with sheep liver','Chicken sausage'),
array('question'=>"20. Which fort was built in Newcastle in 1870 to ward off the Zulus?",
'Fort Mistake','Fort Amiel','Fort Knox','Fort Eaton'),
);
?>

<?php
for ($row = 0; $row < count($Quiz); $row++) { ?>
<section class="box">

<p>
  <h2>
	<?php
	 echo $Quiz[$row]['question'];?>
  </h2>
</p>

<?php 
$x = 0;
	
for($r = $row*4; $r < ($row+1)*4; $r++){
  ?>
  <input type='radio' name="<?php echo $row; ?>" value="<?php echo $x ?>" id="<?php echo $r ?>">
	<label class="option" for="<?php echo $r ?>">
	<?php echo $Quiz[$row][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
		<?php 
		
		?>
	
			</section>
		</section>

	<?php }
?>

<?php
if(isset($_POST['submit'])){
		if(isset($_POST['0'])){
			if($_POST['0'] == 3){
			$total++;
			}
		}
		if(isset($_POST['1'])){
			if($_POST['1'] == 2){
			$total++;
			}
		}
		if(isset($_POST['2'])){
			if($_POST['2'] == 2){
			$total++;
			}
		}
		if(isset($_POST['3'])){
			if($_POST['3'] == 2){
			$total++;
			}
		}
		if(isset($_POST['4'])){
			if($_POST['4'] == 0){
			$total++;
			}
		}
		if(isset($_POST['5'])){
			if($_POST['5'] == 1){
			$total++;
			}
		}
		if(isset($_POST['6'])){
			if($_POST['6'] == 3){
			$total++;
			}
		}
		if(isset($_POST['7'])){
			if($_POST['7'] == 1){
			$total++;
			}
		}
		if(isset($_POST['8'])){
			if($_POST['8'] == 2){
			$total++;
			}
		}
		if(isset($_POST['9'])){
			if($_POST['9'] == 2){
			$total++;
			}
		}
		if(isset($_POST['10'])){
			if($_POST['10'] == 2){
			$total++;
			}
		}
		if(isset($_POST['11'])){
			if($_POST['11'] == 0){
			$total++;
			}
		}
		if(isset($_POST['12'])){
			if($_POST['12'] == 0){
			$total++;
			}
		}
		if(isset($_POST['13'])){
			if($_POST['13'] == 0){
			$total++;
			}
		}
		if(isset($_POST['14'])){
			if($_POST['14'] == 0){
			$total++;
			}
		}
		if(isset($_POST['15'])){
			if($_POST['15'] == 0){
			$total++;
			}
		}
		if(isset($_POST['16'])){
			if($_POST['16'] == 1){
			$total++;
			}
		}
		if(isset($_POST['17'])){
			if($_POST['17'] == 1){
			$total++;
			}
		}
		if(isset($_POST['18'])){
			if($_POST['18'] == 1){
			$total++;
			}
		}
		if(isset($_POST['19'])){
			if($_POST['19'] == 1){
			$total++;
			}
		}
		if(isset($_POST['20'])){
			if($_POST['20'] == 1){
			$total++;
			}	
		}
	
}
echo "<h4> Your score is:"."<br>"."$total"."/20 </h4>";
 if($total >= 0 && $total <= 5){
	echo "<h3> Dissapointing, bwa bwa... </h3>";
}
else if($total >=6 && $total <= 10){
	echo "<h3> Your average and that should be worrying!!! </h3>";
}
else if($total >= 11 && $total <= 15){
	echo "<h3> Not Bad!</h3>";
}
else if($total >= 12 && $total <= 18){
	echo "<h3> Brilliant!!!!</h3>";
}
else if($total >= 19 && $total <= 20){
	echo "<h3> SHOSHOLOZO SHOSHOLOZA!!!</h3>"."<br>".
				"<h3> "." Congratulations you Patriot you</h3>";
}
?>

<br>

<section>

		<h2>CLICK SUBMIT FOR YOUR RESULTS!
			<input id="submit" type="submit" name="submit" value="Submit!"></h2>
	</section>
	</form>
	<br>
	</div>

</body>
</html>
