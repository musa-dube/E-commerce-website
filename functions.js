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