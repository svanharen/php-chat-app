// Inital Password Field
const passField = document.querySelector(".form .field input[type='password']")
toggleBtn = document.querySelector(".form .field i")

toggleBtn.onclick = () => {
    if(passField.type == "password"){
        passField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        passField.type = "password";
        toggleBtn.classList.remove("active");
    }
}

// Confirm Password Field
const confirmPassField = document.querySelector(".form .cpw input[type='password']")
toggleBtn2 = document.querySelector(".form .cpw i")

toggleBtn2.onclick = () => {
    if(confirmPassField.type == "password"){
        confirmPassField.type = "text";
        toggleBtn2.classList.add("active");
    }else{
        confirmPassField.type = "password";
        toggleBtn2.classList.remove("active");
    }
}

