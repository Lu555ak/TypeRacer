var i = 0;
var text = "A set of words that is complete in itself, typically containing a subject and predicate, conveying a statement, question, exclamation, or command, and consisting of a main clause and sometimes one or more subordinate clauses.";
var gameInProgress = false;
/*
let typeInput = document.getElementById("type-input");
let typeText = document.getElementById("type-text");
let bar = document.getElementById("bar");
let barBuddy = document.getElementById("bar-buddy"); //-20 - 810
*/

function startGame(){
    let typeInput = document.getElementById("type-input");
    let typeText = document.getElementById("type-text");

    typeText.innerHTML = text;
    typeInput.value = null;
    gameInProgress = true;
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
    let typeInput = document.getElementById("type-input");
    let typeText = document.getElementById("type-text");

    if(gameInProgress == false){
        startGame();
    }

    var arr = typeInput.value;
    console.log(arr[0]);
   
    console.log(gameInProgress);
}