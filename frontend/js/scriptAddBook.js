function validate(){

    let flag = true;

    let regexTitle = /^(?!\s*$)[^']{1,255}$/;
    let errorTitle = document.getElementById("errortitle");
    let inputTitle = document.getElementById("title").value;
    
    if (!regexTitle.test(inputTitle)) {
        errorTitle.innerHTML = "<p style='color: red;'>&#x274C Title should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("title").style.borderColor = "red";
        flag = false;
    }
    
    let regexAuthor = /^(?!\s*$)[^']{1,255}$/;
    let errorAuthor = document.getElementById("errorauthor");
    let inputAuthor = document.getElementById("author").value;

    if (!regexAuthor.test(inputAuthor)) {
        errorAuthor.innerHTML = "<p style='color: red;'>&#x274C Author name should be non-empty, not have apostrophes, and not be longer than 255 characters.</p>";
        document.getElementById("author").style.borderColor = "red";
        flag = false;
    }

    let regexYear = /^\d{4}$/;
    let errorYear = document.getElementById("erroryear");
    let inputYear = document.getElementById("year").value;

    if (!regexYear.test(inputYear)) { // Validate against regex
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

document.getElementById("title").addEventListener("input", function(){

    let regexTitle = /^(?!\s*$)[^']{1,255}$/;
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