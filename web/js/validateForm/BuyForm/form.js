let form = document.querySelector('.formValidate');
let formInputs = document.querySelectorAll('.inputValidate'); 
let InputPhone = document.querySelector('.inputPhone');
let InputEmail = document.querySelector('.inputEmail');
let InputSelect = document.querySelector('.inputSelect');
let InputCheckBox = document.querySelector('.inputCheckbox');
let submitMessage = document.querySelector('.formMessage');

function validPhoneNumber(phone) {
    let re = /^[0-9\s]*$/;
    return re.test(String(phone));
}

function validateEmail(email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function isEmailFromAnotherCountry(email) {
    let re = /\.co$/;
    return re.test(String(email).toLowerCase());
}

form.onsubmit = function(event) {  
    event.preventDefault();  

    submitMessage.innerHTML = "";

    let emailVal = InputEmail.value;
    let phoneVal = InputPhone.value;
    let emptyInputs = Array.from(formInputs).filter(input => input.value === '');

    formInputs.forEach(function(input) { 
        if (input.value === '') {
            console.log('Input not filled');
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    });

    if (emptyInputs.length !== 0) {
        return false;
    }
    
    if (!validateEmail(emailVal)) {
        console.log('email not valid');
        InputEmail.classList.add('error');
        return false;  
    } else {
        InputEmail.classList.remove('error');
    }

    if (isEmailFromAnotherCountry(emailVal)) {
        console.log('email from another country');
        InputEmail.classList.add('error');
        return false; 
    } else {
        InputEmail.classList.remove('error');
    }

    if (!validPhoneNumber(phoneVal)) {
        console.log('phone not valid');
        InputPhone.classList.add('error');
        return false; 
    } else {
        InputPhone.classList.remove('error');
    }

    if (!InputCheckBox.checked) {
        console.log('checkbox not checked');
        InputCheckBox.classList.add('error');
        return false;  
    } else {
        InputCheckBox.classList.remove('error');
    }

    submitMessage.innerHTML = "<h3>Заявка відправлена з вами обов'язково зв'яжуться</h3>";
    
    form.reset();
};
