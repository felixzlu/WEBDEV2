function validate(){

    let flag = true;

    let regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let errorEmail = document.getElementById("erroremail");
    let inputEmail = document.getElementById("email").value;
    
    if (!regexEmail.test(inputEmail)) {
        errorEmail.innerHTML = "<p style='color: red;'>&#x274C Email address should be non-empty with the format xyz@xyz.xyz</p>";
        document.getElementById("email").style.borderColor = "red";
        flag = false;
    }
    
    let regexLogin = /^(?!\s*$).{1,29}$/;
    let errorLogin = document.getElementById("errorlogin");
    let inputLogin = document.getElementById("username").value;

    if (!regexLogin.test(inputLogin)) {
        errorLogin.innerHTML = "<p style='color: red;'>&#x274C User name should be non-empty and under 30 characters long.</p>";
        document.getElementById("username").style.borderColor = "red";
        flag = false;
    }

    let regexPassword = /^(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    let errorPassword = document.getElementById("errorpassword");
    let inputPassword = document.getElementById("password").value;

    if (!regexPassword.test(inputPassword)) { // Validate against regex
        errorPassword.innerHTML = "<p style='color: red;'>&#x274C Password should be at least 8 characters. 1 uppercase, 1 lowercase.</p>";
        document.getElementById("password").style.borderColor = "red";
        flag = false;
    } 

    let errorPassword2 = document.getElementById("errorpassword2");
    let inputPassword2 = document.getElementById("password2").value;

    if (!(inputPassword2 === inputPassword) || (inputPassword2 === "")) {
        errorPassword2.innerHTML = "<p style='color: red;'>&#x274C Passwords should match and should not be blank.</p>";
        document.getElementById("password2").style.borderColor = "red";
        flag = false;
    }

    let terms = document.getElementById("terms");
    let errorTerms = document.getElementById("errorterms");

    if(!terms.checked){
        errorTerms.innerHTML = "<p style='color: red; display:inline;'>&#x274C Please accept the terms and conditions.</p>";
        flag = false;
    } 

    return flag;
}

document.getElementById("email").addEventListener("input", function(){

    let regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let errorEmail = document.getElementById("erroremail");
    let inputEmail = document.getElementById("email").value;

    if (regexEmail.test(inputEmail)) {
        errorEmail.innerHTML = "";
        document.getElementById("email").style.borderColor = "unset";
    } else {
        errorEmail.innerHTML = "<p style='color: red;'>&#x274C Email address should be non-empty with the format xyz@xyz.xyz</p>";
        document.getElementById("email").style.borderColor = "red";
    }
});

document.getElementById("username").addEventListener("input", function(){

    let regexLogin = /^(?!\s*$).{1,29}$/;
    let errorLogin = document.getElementById("errorlogin");
    let inputLogin = document.getElementById("username").value;

    if (regexLogin.test(inputLogin)) {
        errorLogin.innerHTML = "";
        document.getElementById("username").style.borderColor = "unset";
    } else {
        errorLogin.innerHTML = "<p style='color: red;'>&#x274C User name should be non-empty and under 30 characters long.</p>";
        document.getElementById("username").style.borderColor = "red";
    }
});

document.getElementById("password").addEventListener("input", function(){

    let regexPassword = /^(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    let errorPassword = document.getElementById("errorpassword");
    let inputPassword = document.getElementById("password").value;

    if (regexPassword.test(inputPassword)) {
        errorPassword.innerHTML = "";
        document.getElementById("password").style.borderColor = "unset";
    } else {
        errorPassword.innerHTML = "<p style='color: red;'>&#x274C Password should be at least 8 characters. 1 uppercase, 1 lowercase.</p>";
        document.getElementById("password").style.borderColor = "red";
    }
});

document.getElementById("password2").addEventListener("input", function(){
    
    let inputPassword = document.getElementById("password").value;
    let errorPassword2 = document.getElementById("errorpassword2");
    let inputPassword2 = document.getElementById("password2").value;

    if (!(inputPassword2 === inputPassword) || (inputPassword2 === "")) {
        errorPassword2.innerHTML = "<p style='color: red;'>&#x274C Passwords should match and should not be blank.</p>";
        document.getElementById("password2").style.borderColor = "red";
    } else {
        errorPassword2.innerHTML = "";
        document.getElementById("password2").style.borderColor = "unset";
    }
});

document.getElementById("terms").addEventListener("change", function(){

    let terms = document.getElementById("terms");
    let errorTerms = document.getElementById("errorterms");

    if (terms.checked) {
        errorTerms.innerHTML = "";
    } else{
        errorTerms.innerHTML = "<p style='color: red; display:inline;'>&#x274C Please accept the terms and conditions.</p>";
    }
});