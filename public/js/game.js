class GameText {
    text;
    convertedText = [];
    textLenght;

    constructor(text){
        this.text = text;
        this.textLenght = text.length;

        this.convertText();
    }

    convertText() {
        for(i=0; i<this.textLenght; i++){
            var span = document.createElement('span');
            span.innerHTML = this.text[i];
            this.convertedText.push(span);    
        }
    }

    setColorLetter(index, color){
        this.convertedText[index].style.backgroundColor = color;
    }

    clearColorLetter(){
        this.convertedText = [];
        this.convertText();
    }

    getLetter(index){
        return this.convertedText[index].innerHTML;
    }

    getTextLength(){
        return this.textLenght;
    }

    getText(){
        return this.text;
    }

    printText() {
        var outputText = "";
        for(i=0; i<this.convertedText.length; i++){
            outputText += this.convertedText[i].outerHTML;
        }
        return outputText;
    }
}



var i = 0;
var t = "A set of words that is complete in itself, typically containing a subject and predicate, conveying a statement, question, exclamation, or command, and consisting of a main clause and sometimes one or more subordinate clauses.";
var gameInProgress = false;


var text = new GameText(t);
var words = 0;



function startGame(){
    if(gameInProgress == false){
        let typeInput = document.getElementById("type-input");
        let typeText = document.getElementById("type-text");

        typeText.innerHTML = text.getText();
        typeInput.value = null;
        typeInput.maxLength = text.getTextLength();
        gameInProgress = true;
    }
}

function setProgressBar(percentage){
    let bar = document.getElementById("bar");
    let barBuddy = document.getElementById("bar-buddy"); //-20 - 810

    if(percentage >= 100)
        percentage = 100;

    bar.style.width = percentage + "%";
    bar.innerHTML = percentage  + "%";
    
    var barBuddyPercentage = ((percentage / 100) * 830) - 20;
    barBuddy.style.left = barBuddyPercentage;
}

function keyPressed(){  
    startGame();

    checkGame();
}

function countWords(str) {
    return str.trim().split(/\s+/).length;
}


function checkGame(){
    let typeInput = document.getElementById("type-input");
    let typeText = document.getElementById("type-text");

    var input = typeInput.value;
    var inputLength = input.length;
    var mistakeIndex = [];

    // Word count
    words = countWords(input);

    // Update bar
    var percent = Math.round((inputLength / text.getTextLength()) * 100);
    setProgressBar(percent);

    // Update letters
    text.clearColorLetter();
    for(i=0; i<inputLength; i++){
        if(input[i] == text.getLetter(i)){
            text.setColorLetter(i, "green");
        }
        else{
            text.setColorLetter(i, "red");
            mistakeIndex.push(i);
        }
    }
    typeText.innerHTML = text.printText();

    // Mistake limiter
    if(typeof mistakeIndex !== 'undefined' && mistakeIndex.length > 0)
        typeInput.maxLength = mistakeIndex[0] + 8;
    else
        typeInput.maxLength = text.getTextLength();

}