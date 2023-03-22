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
var wpmnum;

function test(){
    let bb = document.getElementById("bar-buddy");
    bb.src += getCookie("buddy") + ".png";
    console.log("aaaa");

}
setTimeout(test, 1);


function startGame(){
    if(gameInProgress == false){
        let typeInput = document.getElementById("type-input");
        let barBuddy = document.getElementById("bar-buddy");
        let typeText = document.getElementById("type-text");

        typeText.innerHTML = text.getText();
        typeInput.value = null;
        typeInput.maxLength = text.getTextLength();
        gameInProgress = true;
        startTimer();
        console.log(barBuddy.src);
        console.log( getCookie("buddy"));
    }
}

function setProgressBar(percentage){
    let bar = document.getElementById("bar");
    let barBuddy = document.getElementById("bar-buddy"); //-20 - 810

    if(percentage >= 100)
        percentage = 100;

    bar.style.width = percentage + "%";
    bar.innerHTML = percentage  + "%";
    
    var barBuddyPercentage = ((percentage / 100) * 830) - 40;
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
        wpmnum = Math.round(words / (seconds/60))
        wpm.innerText = wpmnum + " WPM";
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

        setCookie("wpm", wpmnum , 10);
        
        setInterval(() => {window.location.href = "/";}, 3000);
    }
}



function getCookie(cname) {
    var name = cname + "="; //Create the cookie name variable with cookie name concatenate with = sign
    var cArr = window.document.cookie.split(';'); //Create cookie array by split the cookie by ';'
     
    //Loop through the cookies and return the cooki value if it find the cookie name
    for(var i=0; i<cArr.length; i++) {
        var c = cArr[i].trim();
        //If the name is the cookie string at position 0, we found the cookie and return the cookie value
        if (c.indexOf(name) == 0) 
            return c.substring(name.length, c.length);
    }
     
    //If we get to this point, that means the cookie wasn't find in the look, we return an empty string.
    return "";
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date(); //Create an date object
    d.setTime(d.getTime() + (exdays*1000*60*60*24)); //Set the time to exdays from the current date in milliseconds. 1000 milliseonds = 1 second
    var expires = "expires=" + d.toGMTString(); //Compose the expirartion date
    window.document.cookie = cname+"="+cvalue+"; "+expires;//Set the cookie with value and the expiration date
}
