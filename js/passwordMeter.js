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
        var hasNumber = /\d/;
        var hasLetter = /[a-zA-Z]/;
        var specialCharacters = /[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/;
        var userMessage = '';

        bar.classList = "progress-bar";
        bar.style.width = '0%';

        if (passwordValue.length <= 3) {
            bar.classList.add("bg-danger");
            bar.style.width = '25%';
            userMessage += 'Password too weak and needs to be more than 8 characters';
        } else if (passwordValue.length <= 8 && passwordValue.length > 3) {
            bar.classList.add("bg-warning");
            bar.style.width = '50%';
            userMessage += 'Password is average and needs to be more than 8 characters';
        } else if (passwordValue.length > 8) {
            bar.classList.add("bg-success");
            bar.style.width = '100%';
            userMessage += 'Strong password ';
        } 

        if (hasNumber.test(passwordValue)) {
            userMessage += '';
        } else {
            userMessage += ' but must include 1 number';
        }
        if (hasLetter.test(passwordValue)) {
            userMessage += '';
        } else {
            userMessage += ', must include 1 letter';
        }
        if (specialCharacters.test(passwordValue)) {
            userMessage += ', these characters are not aloud';
        } else {
            userMessage += '';
        }

        text.innerHTML = userMessage;
    }
};