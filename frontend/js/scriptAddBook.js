/*Assignment Name: Book Cataloging System: Student Library
File Name: scriptAddBook.js
Course Name: Web development, CST 8285_332
Professor: Grace Pauly
Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline
Due Date: March 30, 2025*/

/**This is a validate function for the form submission to add books.
 * It ensures the values are properly entered before submission */
function validate(){

    let flag = true;
/***Each field here monitored for the live updates from the user, so 
 * the users can instantly see feedback as they type. If the input matches the
 * error mesage disappers, if it doesnt, the error message appears and the border turns red.
 */

/***This code ensures the user enters correct title. */

    let regexTitle = /^(?!\s*$)[^']{1,255}$/;
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;

    if (!regexTitle.test(inputTitle)) {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C Title should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("title").style.borderColor = "red";
        flag = false;
    }
/***This code ensures the user enters the author */

    let regexAuthor = /^(?!\s*$)[^']{1,255}$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;

    if (!regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C Author name should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("author").style.borderColor = "red";
        flag = false;
    }
/***This code ensures the user enters the valid year, 4 digits */
    let regexYear = /^\d{4}$/;
    let errorYear = document.getElementById("erroryear");
    let inputYear = document.getElementById("year").value;

    if (!regexYear.test(inputYear)) { // Validate against putting incorrect year.
        errorYear.innerHTML = "<p style='color: red;'>&#x274C Year should be between 0000 and 9999 inclusive.</p>";
        document.getElementById("year").style.borderColor = "red";
        flag = false;
    } 

    let regexGenre = /^(?!\s*$)[^']{1,255}$/;
    let errorGenre = document.getElementById("errorgenre");
    let inputGenre = document.getElementById("genre").value;

    if (!regexGenre.test(inputGenre)) { // Validate against regex
        errorGenre.innerHTML = "<p style='color: red;'>&#x274C Genre should not be blank, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("genre").style.borderColor = "red";
        flag = false;
    } 


    let regexDesc = /^(?!\s*$)[^']{1,255}$/;
    let errorDesc = document.getElementById("errordesc");
    let inputDesc = document.getElementById("description").value;

    if (!regexDesc.test(inputDesc)) { // Validate against regex
        errorDesc.innerHTML = "<p style='color: red;'>&#x274C Description should not be blank, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("description").style.borderColor = "red";
        flag = false;
    } 

    return flag;
}
/***Addeventlistener ensures that each field is monitored for live updates and users can see the feedback instantly as they type.*/
document.getElementById("title").addEventListener("input", function(){

    let regexTitle = /^(?!\s*$)[^']{1,255}$/;//This regex ensures the input accepts the necessary inputs.
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;

    if (regexTitle.test(inputTitle)) {
        errorTitle.innerHTML = "";
        document.getElementById("title").style.borderColor = "unset";
    } else {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C Title should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("title").style.borderColor = "red";
    }
});
/***This code is to validate the author using the regex */
document.getElementById("author").addEventListener("input", function(){

    let regexAuthor = /^(?!\s*$)[^']{1,255}$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;

    if (regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "";
        document.getElementById("author").style.borderColor = "unset";
    } else {
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C Author name should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("author").style.borderColor = "red";
    }
});
/***This code is to validate the year entered in the form */
document.getElementById("year").addEventListener("input", function(){

    let regexYear = /^\d{4}$/;
    let errorYear = document.getElementById("erroryear");
    let inputYear = document.getElementById("year").value;

    if (regexYear.test(inputYear)) {
        errorYear.innerHTML = "";
        document.getElementById("year").style.borderColor = "unset";
    } else {
        errorYear.innerHTML = "<p style='color: red;'>&#x274C Year should be between 0000 and 9999 inclusive.</p>";
        document.getElementById("year").style.borderColor = "red";
    }
});
/***This code is to vlidate the genre function */
document.getElementById("genre").addEventListener("input", function(){

    let regexGenre = /^(?!\s*$)[^']{1,255}$/;
    let errorGenre = document.getElementById("errorgenre");
    let inputGenre = document.getElementById("genre").value;

    if (regexGenre.test(inputGenre)) {
        errorGenre.innerHTML = "";
        document.getElementById("genre").style.borderColor = "unset";
    } else {
        errorGenre.innerHTML = "<p style='color: red;'>&#x274C Genre should not be blank, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("genre").style.borderColor = "red";
    }
});
/***This code is for the add event listener for the Description in the form */
document.getElementById("description").addEventListener("input", function(){

    let regexDesc = /^(?!\s*$)[^']{1,255}$/;
    let errorDesc = document.getElementById("errordesc");
    let inputDesc = document.getElementById("description").value;

    if (regexDesc.test(inputDesc)) {
        errorDesc.innerHTML = "";
        document.getElementById("description").style.borderColor = "unset";
    } else {
        errorDesc.innerHTML = "<p style='color: red;'>&#x274C Description should not be blank, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("description").style.borderColor = "red";
    }
});