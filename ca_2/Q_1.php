<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            text-align: center;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content : center;
            align-item: center;
        }
        label {
            display: block;
            padding: 5px;
        }
    </style>

</head>
<body>



<?php 


        $name = "";
        $email = "";
        $website = "";
        $comment = "";
        $gender = "";
        $name_error = "";
        $email_error = "";
        $website_error = "";
        $comment_error = "";
        $gender_error = "";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['name'])) {
                $name_error = "Please enter your name";
            }
            else {
                $name = htmlspecialchars(trim($_POST['name']));

                if(!preg_match("/^[a-zA-Z ]+$/" , $name)){
                    $name_error = "Username should contain only characters and space.";
                }
            }

            if(empty($_POST['email'])) {
                $email_error = "Please enter your email";
            }
            else {
                $email = htmlspecialchars(trim($_POST['email']));
            }

            if(empty($_POST['website'])) {
                $website_error = "Please enter your website";
            }
            else {
                $website = htmlspecialchars(trim($_POST['website']));
            }

            if(empty($_POST['comment'])) {
                $comment_error = "Please enter your comment";
            }
            else {
                $comment = htmlspecialchars(trim($_POST['comment']));
            }

            if(empty($_POST['gender'])) {
                $gender_error = "Please select your gender";
            }
            else {
                $gender = htmlspecialchars(trim($_POST['gender']));
            }


        }


?>



    <h1>PHP Form Validation</h1>
    <div class="container">
        <form action="Q_1.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value= "<?php echo $name ?>" >
                <span style="color : red"> <?php echo $name_error ?></span>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value= "<?php echo $email ?>"> 
                <span style="color : red"> <?php echo $email_error ?></span>
                <br>
                <label for="website">Website:</label>
                <input type="text" id="website" name="website" value= "<?php echo $website ?>"> 
                <span style="color : red"> <?php echo $website_error ?></span>
                <br>
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment"  value= "<?php echo $comment ?>"></textarea> 
                <span style="color : red"> <?php echo $comment_error ?></span>
                <br>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="Male">Male
                <input type="radio" id="female" name="gender" value="Female">Female
                <input type="radio" id="other" name="gender" value="Other">Other 
                <span style="color : red"> <?php echo $gender_error ?></span>
                <br>
                
                <input type="submit">
        </form>
        </div>

</body>
</html>