function welcome() {
	alert("Welcome to the Animal Kingdom Survey! Please fill out all fields. We hope you enjoyed your visit!");
}

function confirmation() {
    document.forms["form"].submit();
    alert("Submission successful.");
    setTimeout(function () { window.location.reload(); }, 50);
    return true;
}

function validateForm(form){
    
    //var name = "";
    var name = form.name.value;
    var email = form.email.value;
    var animal = form.animal.value;
    var rating = form.rating.value;
    var comment = form.comment.value;

	// Ensure, name, passcode, email, and cell fields are filled out
    if (name == null ||  name == "") {
        alert("Name must be filled out.");
        document.getElementById("name").focus();
        document.getElementById("name").style.backgroundColor = "#FF6666";
        return false;
    } else if (email == null || email == ""){
        alert("Email must be filled out.");
        document.getElementById("email").focus();
        document.getElementById("email").style.backgroundColor = "#FF6666";
        return false;
    } 
    else if (animal == null || animal == "") {
        alert("Please select a favorite animal.");
        document.getElementById("animal").focus();
        document.getElementById("animal").style.backgroundColor = "#FF6666";
        return false;
    }
    else if (rating == null || rating == "") {
    	alert("Please give a rating.");
        document.getElementById("rating").focus();
        document.getElementById("rating").style.backgroundColor = "#FF6666";
        return false;
    }
    else if (comment == null || comment =="") {
    	alert("Please write a comment.");
        document.getElementById("comment").focus();
        document.getElementById("comment").style.backgroundColor = "#FF6666";
        return false;
    }

    confirmation();
}