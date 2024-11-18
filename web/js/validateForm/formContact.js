let form = document.querySelector('.js-form');
let formInputs = document.querySelectorAll('.js-input');
let inputPhone = document.querySelector('.js-input-phone');
let submit=document.querySelector('.FormSubmit');


function validPhoneNumber(phone) {
    let re = /^[0-9\s]*$/;
    return re.test(String(phone));
}

form.onsubmit = function(event) {   
    event.preventDefault();

    submit.innerHTML = "";
    let phoneVal = inputPhone.value;
    let emptyInputs = Array.from(formInputs).filter(input => input.value === '');

    formInputs.forEach(function(input) { 
        if(input.value === '') {
            input.classList.add('error');
            console.log('Input not filled');
        } else {
            input.classList.remove('error');
        }
    });

    if(emptyInputs.length !== 0) {
        return false;
    }

    if(!validPhoneNumber(phoneVal)) {
        inputPhone.classList.add('error');
        console.log('Phone not valid');
    } else {
        inputPhone.classList.remove('error');
    }

    submit.innerHTML = "<h3>Дані відправлені</h3>";

    form.reset();
};
