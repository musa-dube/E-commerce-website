function displayContent(contentID) { 
    
    // Hide all content sections
    var content = document.querySelectorAll(".post-description");
    content.forEach(function (section) {
        section.style.display = "none";
    });


    //display content
    var displaySelection = document.getElementById(contentID);
    displaySelection.style.display = "block";

}

function onlyNumbers(event){
    var numericRange = (event.which) ? event.which : event.keyCode
    if (numericRange > 31 && (numericRange < 48 || numericRange > 57)) 
        return false;
    return true;
}

function showLogin() { 
    var loginScreen = document.getElementById(".sign-in-id");
    loginScreen.style.marginLeft = "auto";
}