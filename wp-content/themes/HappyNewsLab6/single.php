
 <?php get_header(); ?>
 <?php require "blocks/nav.php" ?>
<?php the_post(); ?>




<section class="col-md-10">
<div>
          <div >
            <!-- title -->
            <h3><strong>
            <?php the_title(); ?>
            </strong></h3>
          </div>

          <div >
            <!-- date -->
            <br>
            <small>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php the_date();?>
            </small>
            
          </div>
        </div>

        <!-- image -->
        <?php the_post_thumbnail('large_size_h', 700 ); ?>

        <p >
          <!-- text -->
          <?php the_content(); ?>
          
          
        </p>
        </div>
</section>     
<?php get_footer(); ?>