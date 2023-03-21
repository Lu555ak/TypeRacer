function selectBuddy(index){
    clearSelectedBuddies();

    var element = document.getElementById(index);
    element.classList.add("card-selected");

    setCookie("buddy", "images\buddy" + index + ".png", 10);
    console.log( getCookie("buddy"));

}

function clearSelectedBuddies(){
    for(i=1; i<=12; i++){
        var x = document.getElementById(i);
        x.classList.remove("card-selected");
    }
}


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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