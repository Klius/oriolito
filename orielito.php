<html>
<head>
	<link rel="stylesheet" type="text/css" href="arielito.css">
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
	<script src='permu.js'></script>
</head>
<body>
	<h1 id="titulo" onclick="responsiveVoice.speak(this.innerText,'Spanish Female');">Oriel</h1>
	<center><input id="word" placeholder="Write a name here" style="" type="text" oninput="changeWords(this)"></center>
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
<script>
	function showBig(element){
		document.getElementById("titulo").innerText = element.innerText == "" ? element.value : element.innerText ;
		responsiveVoice.speak(element.innerText,"Spanish Female");
	}
	function changeWords(element){
		element.value = element.value != "" ? element.value : "Oriel";
		showBig(element);
		combinations = vowelCombination(element.value);
		updateList(combinations);
	}
	function updateList(combinatorix){
		
	}
</script>
</body>
</html>
