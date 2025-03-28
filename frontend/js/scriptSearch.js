/*Assignment Name: Book Cataloging System: Student Library
File Name: scriptSearch.js
Course Name: Web development, CST 8285_332
Professor: Grace Pauly
Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline
Due Date: March 30, 2025*/


/***This code ensures the validation of the search form in the student library */
function validate(){

    let flag = true;
/**This code is to make sure the user enters the correct title of the book */
    let regexTitle = /^[^']*$/;
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;
/**If the conditions in the regex are not met, this will thow an error highlighting the box in the red */
    if (!regexTitle.test(inputTitle)) {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("title").style.borderColor = "red";
        flag = false;
    }
/**This code is to validate the author input field  */
    let regexAuthor = /^[^']*$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;
/**If the author name doesnt matches the , show the error messages */
    if (!regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("author").style.borderColor = "red";
        flag = false;
    }

    return flag;
}

document.getElementById("title").addEventListener("input", function(){

    let regexTitle = /^[^']*$/;
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;

    if (regexTitle.test(inputTitle)) {
/**If the Titles matches the regex, remove the error messages */
        errorTitle.innerHTML = "";
        document.getElementById("title").style.borderColor = "unset";
    } else {
/***If the Title name doesnt match, shows an erro message, highlighting the field in red */
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("title").style.borderColor = "red";
    }
});
/***This code is to validate the author entered by the user */
document.getElementById("author").addEventListener("input", function(){

    let regexAuthor = /^[^']*$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;
 /**If the author matches the regex, remove the error messages */
        if (regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "";
        document.getElementById("author").style.borderColor = "unset";
    } else {
/***If the author name doesnt match, shows an erro message, highlighting the field in red */
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("author").style.borderColor = "red";
    }
});