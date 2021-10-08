
<?php
include 'header.php';

if ($_POST["submit"]) {
    $firstname = $_POST["firstname"];
    $location = $_POST["location"];
    $poolsize = $_POST["poolsize"];
    $budget = $_POST["budget"];
    $time = $_POST["time"];
    $description = $_POST["description"];

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
       <h2>Thank you Dear <?php echo $firstname; ?> We have received your request.
       One of our sales specialist will reach out with 10minutes with a quote!</h2>

       <hr>
       <p> <b> FirstName: </b> <?php echo $firstname; ?></p>
       <p> <b> Location: </b> <?php echo $location; ?></p>
       <p> <b> Poolsize: </b> <?php echo $poolsize; ?></p>
       <p> <b> Budget: </b> <?php echo $budget; ?></p>
       <p> <b> TimeFrame: </b> <?php echo $time; ?></p>
       <p> <b> Description: </b> <?php echo $description; ?></p>
        </div>
    </div>
    <a href="designs.php" class ="btn btn-primary">Get new quote</a>
</body>


<?php

include 'footer.php';

