
function myFunction31() {
    var element = document.body;
    element.classList.toggle("invert");
}

const check = document.getElementById("toggle-btn")

if (localStorage.getItem('darkMode')===null){
  localStorage.setItem('darkMode', "false");

}

checkStatus()

function checkStatus(){
  
}