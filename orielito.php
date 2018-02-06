<html>
<head>
	<link rel="stylesheet" type="text/css" href="arielito.css">
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
	<script src='permu.js'></script>
</head>
<body>
	<h1 id="titulo" onclick="responsiveVoice.speak(this.innerText,'Spanish Female');">Oriel</h1>
	<center><input id="word" placeholder="Write a name here" style="" type="text" oninput="changeWords(this)"></center>
	<div id="combinations" class="">
<?php
	$oriel = "oriel";
	$letras = ["a","e","i","o","u"];
	for($i=0;$i<count($letras);$i++){
		print('<div class="col">');
		print('<h2>'.ucfirst($letras[$i]).'</h2>');
		print('<ul>');
		for($j=0;$j<count($letras);$j++){
			for($k=0;$k<count($letras);$k++){
				
				print('<li onmouseover="showBig(this)">');
				print(ucfirst($letras[$i]."r".$letras[$j].$letras[$k]."l"));
				print('</li>');

			}
		}
		print('</ul>');
		print('</div>');
	}
?>
</div>
<script>
	function showBig(element){
		document.getElementById("titulo").innerText = element.innerText == "" ? element.value : element.innerText ;
		responsiveVoice.speak(element.innerText,"Spanish Female");
	}
	function changeWords(element){
		element.value = element.value != "" ? element.value : "Oriel";
		showBig(element);
		combinations = vowelCombination(element.value.toLowerCase());
		updateList(combinations);
	}
	function updateList(combinatorix){
		combinationsDiv = document.getElementById("combinations");
		maxWordsOnCol = combinatorix.length / 5;
		cols = "";
		j = 0;
		vi = 0;
		col = "";
		for (i=0;i<combinatorix.length; i++){
			if (j >= maxWordsOnCol){
				j=0;
				col += '</ul></div>';
				cols += col;
				vi++;
			}
			if( j == 0)
			{
				col = '<div class="col"><h2>'+vowels[vi].toUpperCase()+'</h2><ul>';
			}
			col += '<li onmouseover="showBig(this)" >'+combinatorix[i]+'</li>';
			console.log(combinatorix[i]);
			j++;
		}
		cols += col;
		// clean the div
		combinationsDiv.innerHTML = cols;
		
		
	}
</script>
</body>
</html>
