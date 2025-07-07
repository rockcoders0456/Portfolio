function formValidate() {
    let returnval = true;

    let name = document.forms['myForm']['name'].value;
    if (name.length == 0) {
        alert("Name can not be empty!");
        returnval = false
    } else {
        if (name.length < 5) {
            alert("Your Name is too short!");
            returnval = false;
        };
    }
    if (name.length > 20) {
        alert("Your name is too long!");
        returnval = false;
    };
    let phone = document.forms['myForm']['phone'].value;
    if (phone.length !== 0) {
        if (phone.length != 11) {
            alert("Your phone not valid for Pakistan!");
            returnval = false;
        };
    }


    let email = document.forms['myForm']['email'].value;
    if (email.length == 0) {
        alert("Email can not be empty!");
        returnval = false
    } else {
        if (email.length > 30) {
            alert("Your email is too long!");
            returnval = false
        };
    };

        let message = document.forms['myForm']['message'].value;
    if (message.length == 0) {
        alert("Message can not be empty!");
        returnval = false
    };


    return returnval;
}