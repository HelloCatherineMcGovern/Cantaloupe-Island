<?php

/*

Template Name: Vibes Page

*/

?>

<?php global $optimizer;?>

<?php get_header(); ?>





    <div class="page_fullwidth_wrap layer_wrapper">

        

        <!--CUSTOM PAGE HEADER STARTS-->

            

        <!--CUSTOM PAGE HEADER ENDS-->

  
				<div class="header-color" style="background-image: url(https://cantaloupeisland.com/wp-content/themes/optimizer-child/images/blog-header.png)">
				
				<br>
<br>

<div id="headline">
			<h1 class="serif">
				Good Vibes</h1>
					<h1 class="sans">
				Good Times</h1>
				</div>
					
					</div>
					
					<!--experiment-->
				
				<div class="white-container">
		
			<div class="wine-clear-row-box">
				
				
				
				 <!-- begin Catherine's Code -->
					  	   <?php $catquery = new WP_Query( 'cat=24&posts_per_page=5' ); ?>
<ul>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<li><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<ul><li><?php the_content(); ?></li>
</ul>
</li>
<?php endwhile; ?> 
</ul>
<?php wp_reset_postdata(); ?>
	    <!-- end Catherine's Code -->
				
				
				
				
				
				
				</div>
		</div>
				
			<!--experiment ends-->	
					
			
				</div>

		
		

	
    <div id="content">

        <div class="center">
			

            <div class="single_wrap no_sidebar">
			
				
				<!--single_post class END-->

                      

                  <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     

           

                  <!--COMMENT END-->

                  

          

            

              </div><!--single_wrap class END-->

           

            

            </div>

        </div>

   </div><!--layer_wrapper class END-->

<?php get_footer(); ?>