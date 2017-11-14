function vowelCombination(word){
			wordWithoutVowel = "";
			for (i=0;i<word.length;i++){
				if((word[i]=="a") || (word[i]=="e") || (word[i]=="i") || (word[i]=="o") || (word[i]=="u")){
					wordWithoutVowel += "#";
				}
				else{
					wordWithoutVowel += word[i];
				}
			}
			console.log(wordWithoutVowel);
			getResult(wordWithoutVowel);
			trimResults();
			console.log(results);
		}
		function trimResults(){
			cleanResults = [];
			for(i=0;i<results.length;i++){
				if (results[i] != undefined){
					cleanResults.push(results[i]);
				}
			}
			results = cleanResults;
		}
		vowels = ["a","e","i","o","u"];
		results = [];
		function getResult(refString, currentString){
			
			if(currentString === undefined){
				currentString = "";
			}
			if(refString.length === 0){
				return currentString;
			}else {
				if (refString[0] === '#'){
					for(var i in vowels){
						 results.push(getResult(refString.slice(1),currentString + vowels[i]));
					}
				}else{
					results.push(getResult(refString.slice(1),currentString+refString[0]));
				}
			}
		}
		vowelCombination("oriel");
