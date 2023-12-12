<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<div id="single_top">ブログ</div>
<section>
<div id="single">
<p><span><?php the_time('Y/m/d'); ?></span><i><?php
  $terms = get_the_terms( $post->ID, 'blog-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $output[] = '<a href="' . get_term_link( $term ) .'">' . $term->name . '</a>';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
	?></i></p>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<ul id="blog_more">
<li><?php previous_post_link('%link','≪ Prev'); ?></li><li><?php next_post_link('%link','Next ≫'); ?></li>
</ul>
</div>  
</section>
</div>
<?php get_sidebar(); ?>
</section>
</main>

<?php get_footer(); ?>