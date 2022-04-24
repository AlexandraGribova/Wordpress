
  <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => 3,
]);?>
<div class="slider">  
    <?php
	foreach( $myposts as $i=>$post )
    { 
		setup_postdata( $post );
		?>

        <a href="/?p=<?php the_ID();?>">
        <?php 
            if ($i == 1) {
               ?> <div class="item" style="display:block"><?php
            } else {
               ?><div class="item" style="display:none"><?php
            }
        ?>
        
        <?php the_post_thumbnail('large_size_h', 700 ); ?>
            <div class="slideText"><?php the_excerpt_rss(); ?>...</div>
        </div>
        </a>


        <a class="prev" onclick="minusSlide()">&#10094;</a>
        <a class="next" onclick="plusSlide()">&#10095;</a>

    <?php
wp_reset_postdata(); // Сбрасываем $post

} ?>
<div class="slider-dots my-5">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span>
        <span class="slider-dots_item" onclick="currentSlide(2)"></span>
        <span class="slider-dots_item" onclick="currentSlide(3)"></span>
    </div>
</div>


    


 
