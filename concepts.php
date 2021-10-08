<?php
include 'header.php';

?>


    <section class="concept" id = "concept">
        <div class="title">

                <div class="col50">
        
                    <h2 class ="headText"><span>Concepts</span> of our life</h2>
                    <p>
                        Whatever concept you have in mind, we will definitely
                        make it worth it.
                        Adespaz Pool make things work.
                        Our team of engineers set it all in motion.

                    </p>               
                    <p>
                    Are you building or refurbishing?
                    </p>

                    <p>
                    Are you building a sports complex? 
                    then you need a pool.
                    </p>

                    <p>
                    Are you thinking of a family pool?
                    </p>
                </div>



                <div class="content">

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool4.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>Conception is Everything</h3>
                            <p>
                            We can show you great concepts if you so desire
                            Please dive in to learn more.
                            </p>
                        </div>
                    </div>
             

               

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool6.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>WE go beyond to satisfy</h3>
                        </div>
                    </div>
               


              

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool7.jpg"  alt="">
                        </div>
                        <div class="text">
                        <h3>Our Projects our Pride</h3>
                        </div>
                    </div>
               

               

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool8.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>A trial convinces you</h3>
                        </div>
                    </div>
             
                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool9.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>A pool for all Season</h3>
                        </div>
                    </div>
              


                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool10.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>What our Engineers make</h3>
                        </div>
                    </div>
               


                

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool11.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>A pool for all Season</h3>
                        </div>
                    </div>
              


                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool12.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>What our Engineers think and make</h3>
                        </div>
                    </div>
               

                <div class="title">
                    <a href ="contact.php" class ="btn">Talk to us</a>
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


</body>
</html>

<?php

include 'footer.php';
