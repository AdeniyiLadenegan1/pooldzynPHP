
<?php
include 'header.php';

?>

    <section class="design" id = "design">
        <div class="row">

                <div class="col50">

            
                    <h2 class ="headText"><span>Check out </span>our designs</h2>
                    <p>
                        From tiny water fountains to large indoor or outdoor
                        pools, Adespaz got you covered.
                    </p>               
                    <p>
                    See more designs that you desire and contact us asap to get a quote.
                    </p>
                </div>

            <div class="col50">
                    <div class="imgbox">
                        <img src="img/pool12.jpg"  alt="">
                    </div>
            </div>

               
            </div>
        </div>



        <div class="row">

            <div class="col50">
                <div class="imgbox">
                    <img src="img/pool3.jpg"  alt="">
                </div>
            </div>


            <div class="col50">

        
                <h2 class ="headText"><span>Check out </span>our designs</h2>
                <p>
                    More designs to make your life easier.
                    Reach out to get a quote.
                </p>               
                <p>
                Dont get stressed if you got no idea,
                let our team do the thinking for you.
                </p>
            </div>

                 
        </div>

    </section>


    <section class="concept" id = "concept">
        <div class="title">

        <div class="col50">
        
        <h2 class ="headText"><span>Designs</span> to pick from</h2>
        <p>
            Make a choice and contact us.
            We give the best design and option.
            
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
                            Amazing concepts you will be amazed.
                            </p>

                        </div>
                        </div>
                    </div>
                          

                    <div class="box">
                        <div class="imgbox">
                            <img src="img/pool6.jpg"  alt="">
                        </div>
                        <div class="text">
                            <h3>WE go beyond to satisfy</h3>

                            <p>
                            Get ready to make your pool go live.
                            </p>

                       
                        </div>
                    </div>
               

                    
            </div>
            
        </div>
        
        <a href="concepts.php" class ="btn btn-primary">More Concepts</a>
    </section>


<section class="contact">

<div class ="content">
  
    <h3>Now lets design this Amazing pool together</h3>
    <p>Please provide your details here and describe your the kind of 
        pool you desire. We will revert to you shortly.
    </p>
       

        <div class="content">
            <div class="box">
                <div class="imgbox">
                    <img src="img/pquote.jpg"  alt="">  
                </div>
                <div class="text">
                    <h3>Beautiful Pool designs</h3>
                </div>
            </div>     
        </div>

    </div>

  <form action ="proforma.php" method ="post">
    <input type="text" name ="firstname" placeholder="First Name">
    <input type="text" name ="location" placeholder="Address">
    <input type="text" name ="poolsize" placeholder="Family, Medium, Large, Olympic, Concert size">
    <input type="text" name ="budget" placeholder="Budget for your pool">
    <input type="text" name ="time" placeholder="Time Frame">
    <textarea name ="description" id ="" cols ="30" rows="10" class="box message" placeholder="Briefly describe any detail about your pool"></textarea>
    <input class = "btn" type= "submit" name ="submit" value ="Send message">
    
    </form>
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
