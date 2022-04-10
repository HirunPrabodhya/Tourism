//arrow function to return element when  passed id
let id = (id) => document.getElementById(id);
//getting form elements by id
let uname = id("name"),
    email = id("email"),
    message = id("message"),
    nameError = id("nameError"),
    emailError = id("emailError"),
    messageError = id("messageError"),
    form = id("form");
//adding event listner to submit button


function formValidate(){
    checkEmpty("Name", uname, nameError);
    checkEmail(email.value);
    checkEmpty("Message", message, messageError);
}
//checking email format
let checkEmail = (mail) => {
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        emailError.innerHTML = "Email is incorrect !";
    } else {
        emailError.innerHTML = "";
    }
}
//checking emptiness of fields ignoring spaces
let checkEmpty = (fieldName, field, errorField) => {
    if (field.value.trim() === "") {
        errorField.innerHTML = fieldName + " cannot be empty !";
    } else {
        errorField.innerHTML = "";
    }
}