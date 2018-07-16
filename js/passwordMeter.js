document.addEventListener('DOMContentLoaded', function(){ 
    doStuff();
}, false);

function doStuff(){

password.addEventListener("keyup", function(e){ passwordStrength(e)} );

function passwordStrength(e) {

var password = document.getElementById('password');
var bar = document.getElementById('password-bar');
var text = document.getElementById('password-text');
var passwordValue = password.value;
 var result = zxcvbn(passwordValue, e);
    bar.classList = "progress-bar";
    bar.style.width = '0%'
if (result.score == 0) {
    bar.classList.add("bg-danger");
    bar.style.width = '25%'
}

if (result.score == 1) {
    bar.classList.add("bg-warning");
    bar.style.width = '50%'
}

if (result.score >= 2) {
    bar.classList.add("bg-success");
    bar.style.width = '100%'
}
if (passwordValue.length <= 8) {
    text.innerHTML = "Sorry not long enough keep trying &#9786";
} else if (passwordValue.length > 8) {
    text.innerHTML = "Perfect length! &#9786"
}
if (!passwordValue.includes(/[0-9]/g)){
    text.appendHTML('Must include 1 number')
}
};
}
