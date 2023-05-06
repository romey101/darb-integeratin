const password = document.querySelector('#password')
const submit = document.querySelector('#submit')
submit.addEventListener('click', (event) =>{
event.preventDefault();

if(password.value.trim() ==''){
    error(password, 'الرجاء ادخال رمز الدخول* ')
}
else if (password.value.trim() == '112233'){
    success(password);
    alert('تم تسجيل الدخول بنجاح')
} else {
    error(password, 'رمز الدخول خاطئ* ')
}
});


    


function error(element, msg){
    element.style.border = '3px red solid';
    const parent = element.parentElement;
    const p= parent.querySelector('p')
    p.textContent= msg;
    p.style.visibility= 'visible';
    
}

function success(element){
    element.style.border = '3px green solid';
    const parent = element.parentElement;
    const p= parent.querySelector('p')
    p.style.visibility= 'hidden';
}