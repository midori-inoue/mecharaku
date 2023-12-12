<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<div id="single_top">めちゃ楽で売れている印刷商品</div>
<section>
<div id="single">
<p><!--<span><?php the_time('Y/m/d'); ?></span>--><?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $output[] = '<i class="' . $term->slug .'">';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
?>
<?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $output[] = '<a href="' . get_term_link( $term ) .'">' . $term->name . '</a>';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
	?></i>
<?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( $term->parent != 0 )
      $output[] = '<i class="' . $term->slug .'">';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
?><?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( $term->parent != 0 )
      $output[] = '<a href="' . get_term_link( $term ) .'">' . $term->name . '</a>';
    }
    if( count( $output ) )
      echo '' . join( ", ", $output ) . '';
  }
	?></i></p>
<h1><?php the_title(); ?></h1>
<p class="price"><?php
//値が空の場合出力を除外する
$field = get_field('top_unit');
if($field){echo '<i>'.$field.'</i>';}
    ?> <?php
//値が空の場合出力を除外する
$field = get_field('top_price');
if($field){echo '<span>'.$field.'</span>';}
    ?>円～</p>
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