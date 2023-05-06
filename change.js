function change() {
  const pass = '112233';
    var oldPass = document.getElementById("oldPass").value;
   
    var newPass = document.getElementById("newPass").value;
   
    var confirmPass = document.getElementById("confirm").value;
   
    var error = document.getElementById('Error');
  
    if (oldPass == "" || newPass == "" || confirmPass == "") {
   
      error.textContent = "*الرجاء التحقق من تعبئة جميع الحقول";
   
      error.style.display = "block";
   
      return;
   
    }
   
    if (newPass != confirmPass) {
   
      error.textContent = "كلمة المرور الجديدة وتأكيد كلمة المرور غير متطابقين";
   
      error.style.display = "block";
   
      return;
   
    }
    if (oldPass != pass) {
   
      error.textContent = "كلمة المرور الحالية غير صحيحة";
   
      error.style.display = "block";
   
      return;
   
    }
    if(oldPass==pass && newPass==confirmPass){
      alert('تم تغيير كلمة المرور بنجاح');
      window.location.href = 'login.html'
    }
   
  }
  
  function cancel() {
   
    // Clear the input fields
   
    document.getElementById("oldPass").value = "";
   
    document.getElementById("newPass").value = "";
   
    document.getElementById("confirm").value = "";
   
    window.location.href = 'login.html'
   
  }
   
  