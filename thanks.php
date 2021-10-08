

<?php
include 'header.php';

if ($_POST["submit"]) {
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

}
?>

<body>

<section class ="feedback" id ="feedback"> 

    <div class="content">

        <div class="box">
                <div class="imgbox">
                    <img src="img/cl1.jpg"  alt="">  
                </div>
                <div class="text">
                    
                    <p>
                        Thank you so much Adespaz.
                        I gave the best birthday gift to my wife. She always loves 
                        the pool. 
                    
                    </p>
                    <h3>Andy Murray</h3>


                </div>
        </div>
    </div>
</section>




    <div class="container">
      
       <div id="thanks">
       <h2>Dear <?php echo $firstname; ?> Thank you for reaching out to us</h2>

       <hr>
       <p> <b> FirstName: </b> <?php echo $firstname; ?></p>
       <p> <b> LastName: </b> <?php echo $lastname; ?></p>
       <p> <b> Email: </b> <?php echo $email; ?></p>
       <p> <b> Subject: </b> <?php echo $subject; ?></p>
       <p> <b> Message: </b> <?php echo $message; ?></p>
        </div>
    </div>
</body>
<a href="index.php" class ="btn btn-primary">Begin again</a>

<?php

include 'footer.php';
