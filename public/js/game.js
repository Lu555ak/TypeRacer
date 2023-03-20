var i = 0;

function keyPressed(){
    setProgressBar(i);
    i++
}

function setProgressBar(percentage){
    if(percentage >= 100)
        percentage = 100;

    var elem = document.getElementById("bar");
    elem.style.width = percentage + "%";
    elem.innerHTML = percentage  + "%";

}