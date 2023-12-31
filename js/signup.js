const form = document.querySelector('.signup form');

submitBtn = form.querySelector('.button input');

errorMessage = form.querySelector('.error-message');

form.onsubmit = (e) => {
    e.preventDefault(); // preventing form from submitting
}

submitBtn.onclick = () => {
    //starting AJAX
    let xhr = new XMLHttpRequest();             //creating XML object
    xhr.open("POST", "php/signup.php", true);   //sending post request to signup.php file
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                trimmedData = data.trim();  //removing white spaces from start and end of data
                if(trimmedData == "success"){
                    location.href = "users.php"   //redirecting to users.php page on sign up success
                }else{
                    console.log("error");
                    errorMessage.textContent = data;    //error message from php file
                    errorMessage.style.display = "block"; 
                }

            }
        }
    }
    //sending form data through ajax to php
    let formData = new FormData(form); //creating new formData object

    xhr.send(formData); //sending form data to php
}