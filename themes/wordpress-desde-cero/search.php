<?php get_header();


if(have_posts()):
    while(have_posts()):
        the_post();
        //escribimos lo que va en el bucle
?>
<h2><a href="<?php the_permalink()?>"> <?php the_title() ?></a> </h2>
<p> <span> <?php the_date() ?> </span></p>
<p> <span> <?php the_author() ?> </span></p>
<p> <span> <?php the_category() ?> </span></p>

<p> <?php the_excerpt() ?> </p>
<?php 
        //hasta aqui lo que va de bucle
    endwhile;

else:
    echo 'no hay resultados para su busqueda';

endif;

 get_footer(); ?>