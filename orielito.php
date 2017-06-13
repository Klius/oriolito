<html>
<head>
	<link rel="stylesheet" type="text/css" href="arielito.css">
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
</head>
<body>
	<h1 id="titulo" onclick="responsiveVoice.speak(this.innerText);">Oriel</h1>
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
		document.getElementById("titulo").innerText = element.innerText;
	}
</script>
</body>
</html>