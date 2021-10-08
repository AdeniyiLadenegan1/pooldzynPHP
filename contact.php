


<?php
include 'header.php';

?>
<section class="contact">

    <div class ="content">

        <h3>Oh Lets create an Amazing pool</h3>
        <p>This is who we are, this is what we love to do.
            We create the best pool experience as much as you desire.
            </p>
           
        <h3>Are you thinking of designing a pool?</h3>
        <p>Are you making a new pool with no design in mind?
            Think no further, this is our job and we are happy
            to provide options for you at pocket friendly price.
        </p>
           
        <h3>Are you thinking of refurbishing an old pool</h3>
        <p> pool is always a pool, it will never become a football field.
            Let us refurbish and renovate your old pool. Adespaz does thhhe best job.
        </p>
           
            <h3>You simply want to have an idea what it costs to build a pool</h3>
        <p>Get your Quote here. Our estimate do justice to your pocket.!</p>
           

            <div class="content">
                <div class="box">
                    <div class="imgbox">
                        <img src="img/pool6.jpg"  alt="">  
                    </div>
                    <div class="text">
                        <h3>Beautiful Pool designs</h3>
                    </div>
                </div>


                <div class="box">
                    <div class="imgbox">
                        <img src="img/pool7.jpg"  alt="">  
                    </div>
                    <div class="text">
                        <h3>Beautiful Pool designs</h3>
                    </div>
                </div>


            <div class="icons">
                <i class="fas fa-mail"></i> adespaz.poolmaker@makepool.com
            </div>

            <div class="icons">
                <i class="fas fa-map-marker-alt"></i> Toronto Ontario 647767 AB
            </div>
    
            <div class="icons">
                <i class="fas fa-globe"></i> www.oriolaladenegan.com
            </div>
    
            <div class="icons">
                <i class="fas fa-phone"></i> Niagara Ontario +6477025684
            </div>
        </div>

      <form action ="thanks.php" method ="post">
        <input type="text" name ="firstname" placeholder="First Name">
        <input type="text" name ="lastname" placeholder="Last Name">
        <input type="text" name ="phone" placeholder="Your Phone number">
        <input type="email" name ="email" placeholder="Your Email">
        <textarea name ="message" id ="" cols ="30" rows="10" class="box message" placeholder="message here"></textarea>
        <input class = "btn" type= "submit" name ="submit" value ="Send message">
        
        </form>
    </div>
    <a href="team.php" class ="btn btn-primary">Reviews</a>
</section>


<script type ="text/javascript">
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
    });

    function toggleMenu(){
        const menuToggle = document.querySelector('.menuToggle');
        const navigation =document.querySelector('.navigation');
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    }

</script>

    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="js/script.js"></script>


</body>
</html>

<?php

include 'footer.php';
