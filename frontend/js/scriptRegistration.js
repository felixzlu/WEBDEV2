/*Assignment Name: Book Cataloging System: Student Library
File Name: scriptRegistration.js
Course Name: Web development, CST 8285_332
Professor: Grace Pauly
Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline
Due Date: March 30, 2025*/

/**This function is to validate the registration form entered by the user to register to the student library */
function validate(){

    let flag = true;
/***This code is to validate the email entered by the user. */
    let regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;//This make sure all the details entered by the user are valid
    let errorEmail = document.getElementById("erroremail");
    let inputEmail = document.getElementById("email").value;
    
    if (!regexEmail.test(inputEmail)) {
        errorEmail.innerHTML = "<p style='color: red;'>&#x274C Email address should be non-empty with the format xyz@xyz.xyz</p>";
        document.getElementById("email").style.borderColor = "red";
        flag = false;
    }
/***This code is to validate the username entered by the user, if the username is empty or more than 30 characters long, 
 * the error message pops up.
 */
    let regexLogin = /^(?!\s*$).{1,29}$/;
    let errorLogin = document.getElementById("errorlogin");
    let inputLogin = document.getElementById("username").value;

    if (!regexLogin.test(inputLogin)) {
        errorLogin.innerHTML = "<p style='color: red;'>&#x274C User name should be non-empty and under 30 characters long.</p>";
        document.getElementById("username").style.borderColor = "red";
        flag = false;
    }
/**This code is to validate the password entered by the user
 * This make sure the password is atleast 8 characters long, with the one uppercase and
 *  lower case letter.
 */
    let regexPassword = /^(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    let errorPassword = document.getElementById("errorpassword");
    let inputPassword = document.getElementById("password").value;

    if (!regexPassword.test(inputPassword)) { // Validate against regex
        errorPassword.innerHTML = "<p style='color: red;'>&#x274C Password should be at least 8 characters. 1 uppercase, 1 lowercase.</p>";
        document.getElementById("password").style.borderColor = "red";
        flag = false;
    } 
/***This code is to validate the password2 entered by the user to match the primary passowrd and should 
 * throw an error message if the results do not match.
 */
    let errorPassword2 = document.getElementById("errorpassword2");
    let inputPassword2 = document.getElementById("password2").value;

    if (!(inputPassword2 === inputPassword) || (inputPassword2 === "")) {
        errorPassword2.innerHTML = "<p style='color: red;'>&#x274C Passwords should match and should not be blank.</p>";
        document.getElementById("password2").style.borderColor = "red";
        flag = false;
    }
/***This code lets the user accepts the terms and conditions  */
    let terms = document.getElementById("terms");
    let errorTerms = document.getElementById("errorterms");

    if(!terms.checked){
        errorTerms.innerHTML = "<p style='color: red; display:inline;'>&#x274C Please accept the terms and conditions.</p>";
        flag = false;
    } 

    return flag;
}
/***This code  adds the real time validation to an input email entered by the user*/
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

/***This code  adds the real time validation to an input username entered by the user*/

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

/***This code  adds the real time validation to password entered by the user*/
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
/***This code  adds the real time validation to password2  entered by the user and make sure
 * the passwords matches with the original password and should throws an error
 * message and highlights the input field to red.
*/

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
/***This code ensures the terms and conditions are accepted by the user */
document.getElementById("terms").addEventListener("change", function(){

    let terms = document.getElementById("terms");
    let errorTerms = document.getElementById("errorterms");

    if (terms.checked) {
        errorTerms.innerHTML = "";
    } else{
        errorTerms.innerHTML = "<p style='color: red; display:inline;'>&#x274C Please accept the terms and conditions.</p>";
    }
});