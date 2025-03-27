/*Assignment Name: Book Cataloging System: Student Library
File Name: scriptSearch.js
Course Name: Web development, CST 8285_332
Professor: Grace Pauly
Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline
Due Date: March 30, 2025*/

function validate(){

    let flag = true;

    let regexTitle = /^[^']*$/;
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;
    
    if (!regexTitle.test(inputTitle)) {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("title").style.borderColor = "red";
        flag = false;
    }
    
    let regexAuthor = /^[^']*$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;
    
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
        errorTitle.innerHTML = "";
        document.getElementById("title").style.borderColor = "unset";
    } else {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("title").style.borderColor = "red";
    }
});

document.getElementById("author").addEventListener("input", function(){

    let regexAuthor = /^[^']*$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;

    if (regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "";
        document.getElementById("author").style.borderColor = "unset";
    } else {
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C No apostrophes please!</p>";
        document.getElementById("author").style.borderColor = "red";
    }
});