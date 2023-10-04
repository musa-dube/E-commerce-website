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

//show sign in or up form:
var isOpen = false; 
function toggle() {
    var showForm = document.getElementsByClassName('sign-in-container')[0];
 
    if (isOpen) {
        showForm.style.marginLeft = 'auto'; 
        showForm.style.display = 'none'; 
        
    } else {
        showForm.style.marginLeft = '0';    
        showForm.style.display = 'block';  
    }
    isOpen = !isOpen; 
}

document.getElementById('showLink').addEventListener('click', toggle);

//close login:
var isClosed = false;
function close() { 
    var form = document.getElementsByClassName('sign-in-container')[0];
    
    if (isClosed) {
        form.style.marginLeft = '0';    
        form.style.display = 'block';  
    } else { 
        form.style.marginLeft = '500rem';
    }
    isClosed = !isClosed;
}

document.getElementById('closeId').addEventListener('click', close);
