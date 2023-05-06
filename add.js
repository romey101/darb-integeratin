function addOffice() {
  var name = document.getElementById('Oname').value;
  var floor = document.getElementById('Ofloor').value;
  var office = document.getElementById('Onumber').value;
  var omajor = document.getElementById('Omajor').value;
  var A = document.getElementById('A').value;
  var errorMessage = document.getElementById('error');
 
  if (name == "" || floor == "" || office == "" || omajor == "" || A == "") {
    errorMessage.textContent = "الرجاء التحقق من تعبئة جميع الحقول";
    errorMessage.style.display="block";
  } else {
    alert('تمت إضافة المكتب بنجاح');
    window.location.href='index.php'
  }
}
 
function cancel() {
  // Clear the input fields
  document.getElementById("Oname").value = "";
  document.getElementById("Ofloor").value = "";
  document.getElementById("Onumber").value = "";
  document.getElementById("Omajor").value = "";
  document.getElementById("A").value = "";
  window.location.href='index.php'
}

