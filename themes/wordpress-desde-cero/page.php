<?php get_header()?>
    <!-- Example row of columns -->
    <div class="row">
      <?php 
      if(have_posts()){
      while(have_posts()){
      the_post();?>
<div class="col-md-12">
        <h2><?php the_title()?></h2>
        <p><?php the_content()?>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        
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