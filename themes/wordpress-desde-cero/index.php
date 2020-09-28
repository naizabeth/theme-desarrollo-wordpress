<?php get_header()?>
    <!-- Example row of columns -->
    <div class="row">
      <?php 
      if(have_posts()){
      while(have_posts()){
      the_post();?>
<div class="col-md-4">
<figure>
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('full'); ?>
    </a>
<?php endif; ?>


</figure>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?>Heading</h2></a>
        <p><?php the_content()?>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="<?php the_permalink()?>" role="button">View details &raquo;</a></p>
      </div>
    </div>
<?php
}
      }else{
        echo 'no tienes ningun data';
      }
    ?>

    <hr>

  </div> <!-- /container -->

</main>
<?php get_footer()?>
  
