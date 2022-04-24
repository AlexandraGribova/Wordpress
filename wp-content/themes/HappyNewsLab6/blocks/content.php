<section class="col-md-10">


<?php require "slider.php"?>
  <div>


  <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		
    <div class="panel panel-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                        data-mdb-ripple-color="light">
                            <?php the_post_thumbnail('spec_thumb'); ?>

                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

                        </div>
                    </div>
                     <div class="col-md-9">
                        <h3><strong><?php the_title();?></strong></h3>
                        <p><?php the_date();?></p>
                        <p class="text-muted">
                          <?php the_excerpt_rss(); ?>
                        </p>
                        <?php $home_url = get_permalink(); ?>
                        <a style="color:   #922b3e" href="/?p=<?php the_ID();?>">Читать далее...</a>
                     </div>
                </div>
         </div>

		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>




<?php
  require "pagination.php"

?>
</div>
</section>
