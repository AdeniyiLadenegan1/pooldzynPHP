<?php
include 'header.php';

?>

<section class="smoke" id ="smoke">

<h2>
    <span>A</span>
    <span>D</span>
    <span>E</span>
    <span>S</span>
    <span>P</span>
    <span>A</span>
    <span>Z</span>
</h2>


</section>

    <section class="banner" id = "banner">

        <div class="content">

            <h2>POOL DZYN INC.</h2>
            <p>
                We are the pool people.
                We Create pools to your taste.
                Our reputation precedes us.
            </p> 
                
            <p>
            Look no further. Dive in to learn more from our archives.
            Warm or cold, a pool is all you need.
            </p>

            <a href="designs.php" class ="btn btn-primary">Dive in</a>
        </div>
    </section>

    <section class="concept" id = "concept">
        <div class="title">

                <div class="col50">
        
                    <h2 class ="headText"><span>Ex</span>plore amazing water concepts!</h2>
                    <p>
                        We have over 50 years of experience and we have done 
                        bothe large and small projects.
                        
                    </p>               
                    <p>
                    However you think, no project is small for us.
                    wWe embark on your project like it is the last thing we will do.
                    </p>
                </div>



                <div class="content">

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool12.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>Conception is Everything</h3>
                        </div>
                    </div>
             

               
                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool13.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>WE go beyond to satisfy</h3>
                        </div>
                    </div>
               
             

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool15.jpg"  alt="">
                        </div>
                        <div class="text">
                        <h3>Our Projects our Pride</h3>
                        </div>
                    </div>
               
                </div>
        </div>
    
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
