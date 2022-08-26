function subscribe(){
    document.getElementById("subscribtion-form").style.display = "inline";
}
var date = document.getElementById("btext")
const today = new Date()
date.innerHTML = today.toDateString();
