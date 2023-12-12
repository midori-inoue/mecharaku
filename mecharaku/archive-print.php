<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<h1>売れている印刷商品</h1>
<p>めちゃ楽で売れている印刷商品・新商品をまとめています。</p>
<section>
<div id="info">

<ul id="print">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<li><figure><a href="<?php the_permalink(); ?>"><!--画像を追加-->
<?php if( has_post_thumbnail() ): ?>
<?php the_post_thumbnail('medium'); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/blog/no-img.png" alt="no-img"/>
<?php endif; ?></a></figure><div class="category"><i
<?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $output[] = ' class="' . $term->slug .'"';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
?>>
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
<i<?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( $term->parent != 0 )
      $output[] = ' class="' . $term->slug .'"';
    }
    if( count( $output ) )
      echo '' . join( " ", $output ) . '';
  }
?>><?php
  $terms = get_the_terms( $post->ID, 'print-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( $term->parent != 0 )
      $output[] = '<a href="' . get_term_link( $term ) .'">' . $term->name . '</a>';
    }
    if( count( $output ) )
      echo '' . join( "", $output ) . '';
  }
	?></i>

</div><p class="price"><?php
//値が空の場合出力を除外する
$field = get_field('top_unit');
if($field){echo '<i>'.$field.'</i>';}
    ?><?php
//値が空の場合出力を除外する
$field = get_field('top_price');
if($field){echo '<span>'.$field.'</span>';}
    ?>円～</p><dl><dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt><dd><p><?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
  $content = mb_substr( strip_tags( $post->post_content ), 0, 50, 'UTF-8' );
  echo $content . '…';
} else {
  echo strip_tags( $post->post_content );
}
?></p></dd></dl></li>
<?php endwhile; ?><!--ループ終了-->
<?php else: ?>
<h2>記事がありません</h2>
<?php endif; ?>	
</ul>    
</div>
</section>
<!--ページャー-->
<div class="pager">
<?php get_template_part('pager-archive'); ?>
</div>
</div>
<?php get_sidebar(); ?>
</section>
</main>

<?php get_footer(); ?>