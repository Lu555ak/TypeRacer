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
var gameInProgress = false;


var text = new GameText(document.getElementById("t").innerHTML);
var words = 0;
var seconds = 0;


function startGame(){
    if(gameInProgress == false){
        let typeInput = document.getElementById("type-input");
        let barBuddy = document.getElementById("bar-buddy");
        let typeText = document.getElementById("type-text");

        typeText.innerHTML = text.getText();
        typeInput.value = null;
        typeInput.maxLength = text.getTextLength();
        gameInProgress = true;
        barBuddy.src = "http://127.0.0.1:8000/" + getCookie("buddy");
        startTimer();
        console.log(barBuddy.src);
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

function startTimer(){
    var timer = document.getElementById('timer');
    var wpm = document.getElementById('wpm');

    function incrementSeconds() {
        if(gameInProgress == true)
            seconds += 1;
        timer.innerText = seconds + " sec";
        wpm.innerText = Math.round(words / (seconds/60)) + " WPM";
    }

    var cancel = setInterval(incrementSeconds, 1000);
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
            text.setColorLetter(i, "#4eb8fa");
        }
        else{
            text.setColorLetter(i, "#e86872");
            mistakeIndex.push(i);
        }
    }
    typeText.innerHTML = text.printText();

    // Mistake limiter
    if(typeof mistakeIndex !== 'undefined' && mistakeIndex.length > 0)
        typeInput.maxLength = mistakeIndex[0] + 8;
    else
        typeInput.maxLength = text.getTextLength();

    // Win check
    if(typeof mistakeIndex === 'undefined' || mistakeIndex.length == 0 && text.getTextLength() == inputLength){
        typeInput.disabled = true;  
        gameInProgress = false;
        
        setInterval(() => {window.location.href = "/";}, 3000);
    }
}



function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}