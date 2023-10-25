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


//show sign in or up form onclick:
var form = document.getElementsByClassName('sign-in-container')[0];

var isOpen = false; 
function toggle() {
    if (isOpen) {
        //hide
        form.style.marginLeft = 'auto'; 
        form.style.display = 'none'; 
        
    } else {
        //display
        form.style.marginLeft = '0';    
        form.style.display = 'block';  
    }
    isOpen = !isOpen; 
}

document.getElementById('showLink').addEventListener('click', toggle);

//close login:
var isClosed = false;
function close() {  
    if (isClosed) {
        //display
        form.style.marginLeft = '0';    
        form.style.display = 'block';  
    } else { 
        //hide
        form.style.marginLeft = '500rem';
    }
    isClosed = !isClosed;
}

document.getElementById('closeId').addEventListener('click', close);

// switch between product images through scroll:
window.onload = function () { 
    //index of current image:
    var index = 0;
    //array of images from db:
    var products = document.getElementsByClassName('product-image');
}