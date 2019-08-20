vowels = ["a","e","i","o","u"];
results = [];
self.addEventListener('message', function(e) {
	var message = vowelCombination(e.data.toLowerCase());
	this.self.postMessage(message);
});
function vowelCombination(word){
			wordWithoutVowel = "";
			results = [];
			for (i=0;i<word.length;i++){
				if((word[i]=="a") || (word[i]=="e") || (word[i]=="i") || (word[i]=="o") || (word[i]=="u")){
					wordWithoutVowel += "#";
				}
				else{
					wordWithoutVowel += word[i];
				}
			}
			//console.log(wordWithoutVowel);
			getResult(wordWithoutVowel);
			trimResults();
			return results;
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
