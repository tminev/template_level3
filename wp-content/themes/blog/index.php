<?php get_header(); ?>

      <!-- MAIN SECTION -->                  
      <section id="home-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->  
            <div class="s-12 l-9">
            

            <?php if(have_posts()):
            while(have_posts()): 
               the_post()
                ?>
                <a href="<?php echo get_post_permalink() ?>" > 

      <div style="margin-bottom: 10px">
            <div class="post-1 line">
                     <div class="s-12 l-11 post-image"> 
                     <?php the_post_thumbnail(array(149,300))?> 
                     
                     </div>
                      
                     
                     
                     <div class="s-12 l-1 post-date">
                     <p class="date"> <?php the_date('d'); ?>  </p> 
                     <p class="month"> <?php the_date('y'); ?>  </p> 
                     </div>
                     <div class="s-12 l-1 post-date"> <?php the_time() ?>  </div>
            </div>

            <div class="post-text" style=" background-color:white ;color: black;">

                     <h2 class="post-text" style="color: black;">  <?php the_title() ?> </h2>
                     <div style=" word-wrap:break-word"> <?php the_content() ?>  </div>
                     <div>Categoty: <?php the_category() ?>  </div>
                     <p class="s-12 l-1 post-date">Author:<?php the_author() ?>  </p>
                      
            </div>
                  <div class="post-text" style=" border:1px solid green">

            <?php
$servername ='localhost';
$username='root';
$password='';
$dbname='wp_level';
$conn = mysqli_connect($servername ,$username , $password ,$dbname);
if (!$conn) {
   die("conection failed" . mysqli_connect_error());
}
else{
   // echo "Успешна връзка ";
}


$id=get_the_ID();

$read_query = "select * from wp_comments WHERE `comment_post_ID`=$id order by comment_date desc limit 5";
$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
   
   while ($row = mysqli_fetch_assoc($result)) {
      
      
        
         echo "" . $row['comment_author'] . "   -      - " . $row['comment_content']." <br>";
        

   }

   
}

                   comment_form(); ?>
                  
       
                  </div>
         </div>
          </a>
             <?php 
             
            endwhile;
            endif ;?>
            </div>




            <!-- SIDEBAR -->             
            <div class="s-12 l-3">
      
               <?php get_sidebar('right'); ?>

            </div>
            <!-- SIDEBAR -->  
         </div>
      </section>

     <?php get_footer(); ?>
