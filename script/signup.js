function submitted(form) {
    
    alert("Hi "+form[0].value+", You have Succsessfully Registered under these following credentials: "+form[2].value);
    return true;
}

function terms_changed(termsCheckBox){
    
    if(termsCheckBox.checked){
        document.getElementById("submit_button").disabled = false;
    } else{
        document.getElementById("submit_button").disabled = true;
    }
}

function passwordTypeCheck(){
    var password = document.getElementById("password").value;    
    var rePassword = document.getElementById("rePassword").value;
    var isChecked = document.getElementById("terms_and_conditions").checked;
    if(password==rePassword && isChecked){
        console.log("Password Confirmed!!!");
        document.getElementById("submit_button").disabled = false;
       }else{
           document.getElementById("submit_button").disabled = true;
           console.log("Password Error!!!");
       }
}

