// login form validation
function login(){
    var uname = document.forms['myForm']['uname'].value;
    var upass = document.forms['myForm']['upass'].value;

    if(uname == ''){
        window.alert('Please enter username');
        document.forms['myForm']['uname'].focus();
        return false;
    }
    if(upass == ''){
        window.alert('Please enter password');
        document.forms['myForm']['upass'].focus();
        return false;
    }
    return true;
}

// registration form validation
function checkReg(){
    var regExp = "[a-z0-9_.]+@[a-z]+\.[a-z]{2,4}$";
    if(document.forms['myForm']['uname'].value == ''){
        window.alert("Please enter username");
        document.forms['myForm']['uname'].focus();
        return false;
    }
    if (document.forms['myForm']['uemail'].value == '')
    {
        window.alert("Please enter email address");
        document.forms['myForm']['uemail'].focus();
        return false;
    }
    if(document.forms['myForm']['upass'].value == ''){
        window.alert("Please enter password");
        document.forms['myForm']['upass'].focus();
        return false;
    }
    if(document.forms['myForm']['umob'].value == '' || isNaN(document.forms['myForm']['umob'].value)){
        window.alert("Please enter valid contact number");
        document.forms['myForm']['umob'].focus();
        return false;
    }
    if(document.forms['myForm']['udob'].value == ''){
        window.alert("Please enter date of birth");
        document.forms['myForm']['udob'].focus();
        return false;
    }
    if(document.forms['myForm']['uaddr'].value == ''){
        window.alert("Please enter address");
        document.forms['myForm']['uaddr'].focus();
        return false;
    }
    return true;
}

// feedback form validation
function checkFeedback(){
    if(document.forms['myForm']['organizer'].value == ''){
        window.alert("Please select organizer");
        document.forms['myForm']['organizer'].focus();
        return false;
    }
    if(document.forms['myForm']['feedback'].value == ''){
        window.alert("Please enter your feedback");
        document.forms['myForm']['feedback'].focus();
        return false;
    }
    return true;
}

// venue form validation
function checkVenue(){
    if(document.forms['myForm']['venue'].value == ''){
        window.alert("Please enter venue");
        document.forms['myForm']['venue'].focus();
        return false;
    }
    if(document.forms['myForm']['event'].value == ''){
        window.alert("Please enter event");
        document.forms['myForm']['event'].focus();
        return false;
    }
    if(document.forms['myForm']['address'].value == ''){
        window.alert("Please enter address");
        document.forms['myForm']['address'].focus();
        return false;
    }
    if(document.forms['myForm']['city'].value == ''){
        window.alert("Please enter city");
        document.forms['myForm']['city'].focus();
        return false;
    }
    return true;
}