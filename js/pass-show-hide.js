// Inital Password Field
const passField = document.querySelector(".form .field input[type='password']")
toggleBtn = document.querySelector(".form .field i")

toggleBtn.onclick = () => {
    if(passField.type == "password"){
        passField.type = "text";
    }else{
        passField.type = "password";
    }
}

// Confirm Password Field
const confirmPassField = document.querySelector(".form .cpw input[type='password']")
toggleBtn2 = document.querySelector(".form .cpw i")

toggleBtn2.onclick = () => {
    if(confirmPassField.type == "password"){
        confirmPassField.type = "text";
    }else{
        confirmPassField.type = "password";
    }
}

