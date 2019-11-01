<!-- Please Enter Your Email Below -->
<?php
    if (isset($_POST["submit"])) { 

        $name    = $_POST['name'];     
        $email   = $_POST['email'];     
        $message = $_POST['msg'];     
        $subject = $_POST['subject'];     
           

        if (!$name) {
            $error.="<br/>Please Enter Your Name";
        }
        if (!$email) {
            $error.="<br/>Please Enter Your Email Address";
        }
        if (!$message) {
            $error.="<br/>Please Enter a Message";
        }
        if (!$subject) {
            $error.="<br/>Please Enter a Subject";
        }
        
        if ($error) {
            $result = '<div class="alert alert-danger"><strong>There Were Error(s)'.$error.'</strong></div>';
        } else {
            $to         = "EnterEmail"; /* Please Enter Your Email Here */
            $title      =  $subject;
            $contant    =  $message;
            $header     =  "From:".$email."\r\n" ;

            if (mail($to , $title , $contant ,$header)) {
                $result='<div class="alert alert-success">
                <strong>Thank You in Touch
                </strong></div>';
               
                $name    = "";
                $email   = "";
                $subject = "";
                $message = "";

            } else {
                $result='<div class="alert alert-success">
                <strong>Sorry, There Was an Error In your Message. Please Try Again Later.
                </strong></div>';
            }
            

        } 
    }
    
   //<!--  -->
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First WebPage</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1"/>
    <!-- Bootstrap4 CDN CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- style -->
    <style>
        .emailFrorm{
            border:1px solid grey;
            border-radius:10px;
            margin-top:20px;
        }
        textarea {
            height:120px;
        }
        form {
            padding-bottom: 20px;
        }
    </style>
    <!-- End of Style  -->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 emailFrorm">
                <h1>Contact Me</h1>
                <?php 
                    echo $result;
                ?>
                <form method="post">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">
                            Your Name:
                        </label>
                        <input type="text" name="name"class="form-control"
                        placeholder="Your Name" value="<?php if(isset($name)) {echo $name;}  ?>"/>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">
                            Your Email:
                        </label>
                        <input type="email" name="email"class="form-control"
                        placeholder="Your Email" value="<?php if(isset($email)) {echo $email;}  ?>"/>
                    </div>
                    <!-- Subject -->
                    <div class="form-group">
                        <label for="subject">
                            Your Subject:
                        </label>
                        <input type="text" name="subject"class="form-control"
                        placeholder="Your Subject" value="<?php if(isset($subject)) {echo $subject;}  ?>"/>
                    </div>
                    <!-- Message -->
                    <div class="form-group">
                        <label for="msg">
                            Your Message:
                        </label>
                        <textarea class="form-control" name="msg"><?php if(isset($message)) {echo $message;}  ?></textarea>
                    </div>
                    <input type="submit" name="submit"class="btn btn-success btn-lg"
                    value="Submit"/>
                </form>
            </div>
        </div>
       
    </div>
    <!-- Bootstrp CDN JS & Juqary Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
    </html>

