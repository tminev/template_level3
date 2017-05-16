<?php
/*
* Template name: template_sidebar_bottom
*/

 get_header(); ?>

      <!-- MAIN SECTION -->                  
      <section id="home-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
            
               <!-- ARTICLE 1 -->               
               <article class="post-1 line">
         <?php if(have_posts()):  
              while(have_posts()):
                  the_post();
         ?>


              
                  <!-- text -->                 
                  <div class="post-text">
                     <a href="post-1.html">
                        <h2>  <?php the_title() ?> </h2>
                     </a>
                     <div style=" word-wrap:break-word"> <?php the_content(); ?>
                      </div>
                  </div>
                  <!-- date -->                 
                  <div class="s-12 l-1 post-date">
                     <p class="date">07</p>
                     <p class="month">mar</p>
                  </div>


                
            <?php 
            endwhile;
            endif ?>

               </article>
                <div class="line">
                  <div class="advertising horizontal">
                     <?php get_sidebar('bottom'); ?>
                  </div>
               </div>
               
            
            </div>

            <!-- SIDEBAR -->             
            <div class="s-12 l-3">
      
               <?php get_sidebar('right'); ?>
               
            </div>
            
            <!-- SIDEBAR -->  
         </div>

      </section>

     <?php get_footer(); ?>
