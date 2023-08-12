<?php 
    include_once("config.php");

    $fname     = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname     = mysqli_real_escape_string($connection, $_POST['lname']);
    $email     = mysqli_real_escape_string($connection, $_POST['email']);
    $password  = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

    if(
           !empty($fname) 
        && !empty($lname) 
        && !empty($email) 
        && !empty($password)
        && !empty($cpassword) )
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                // check if password and confirm password are the same
                if($password === $cpassword){
                    // check if already valid user
                    $sql = mysqli_query($connection, "SELECT email FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql) > 0){ // if email already exists
                        echo "$email - This email already exists!";
                    }else{
                        // check if image is uploaded and if valid
                        if(isset($_FILES['image'])){ 
                            $img_name = $_FILES['image']['name']; // get the image name
                            $tmp_name = $_FILES['image']['tmp_name']; // get the temp name of the image to save/move in our folder

                            // explode image and get the extension (jpg, png, etc.)
                            $img_explode = explode('.', $img_name);
                            $img_ext = end($img_explode); // get the extension of the image
                            
                            $extensions = ['png', 'jpeg', 'jpg']; // allowed extensions
                            if(in_array($img_ext, $extensions) === true){ // check if extention is in array
                                $time = time(); // get the current time 
                                                // this will be used to rename the image file to make the unique time uploaded
                                
                                // move the uploaded image to our folder
                                $new_img_name = $time.$img_name;

                                if(move_uploaded_file($tmp_name, "../images/".$new_img_name)){ // if successful upload
                                    $status = true; // set status to true (online)
                                    $random_id = rand(time(), 10000000); // generate random id for user

                                    // insert all data to database
                                    $sql2 = mysqli_query($connection, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                                    VALUES (
                                                                        {$random_id}, 
                                                                        '{$fname}', 
                                                                        '{$lname}', 
                                                                        '{$email}', 
                                                                        '{$password}', 
                                                                        '{$new_img_name}',
                                                                        {$status})");
                                    if($sql2){ // if successful insert
                                        $sql3 = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}'"); // get all data of the user
                                        if(mysqli_num_rows($sql3) > 0){
                                            $row = mysqli_fetch_assoc($sql3); // get the data of the user
                                            $_SESSION['unique_id'] = $row['unique_id']; // set session to unique id
                                            echo "success";
                                        }

                                    }
                                    else{
                                        echo "Error: Data not uploaded!";
                                    }
                                }
                            }else{
                                echo "This extension file is not allowed, please choose a JPG or PNG file!";
                            }
                        }else{
                            echo "Please select an image file!";
                        }
                    }
                }else{
                    echo "Passwords don't match!";
                }
            }else{
                echo "$email - This is not a valid email!";
            }
        }else{
            echo "All fields are required!";
        }

?>  
