<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<h1>ブログ</h1>
<p>めちゃ楽メンバーのブログです。</p>
<section>
<div id="info">
<h2>「<?php single_term_title(); ?>」カテゴリー一覧</h2>
    
<ul id="blog">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <li><figure><a href="<?php the_permalink(); ?>"><!--画像を追加-->
<?php if( has_post_thumbnail() ): ?>
<?php the_post_thumbnail('medium'); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/blog/no-img.png" alt="no-img"/>
<?php endif; ?></a></figure><dl><dt><i><?php
  $terms = get_the_terms( $post->ID, 'blog-cat' );
  if ( !empty( $terms ) ) {
    $output = array();
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $output[] = '<a href="' . get_term_link( $term ) .'">' . $term->name . '</a>';
    }
    if( count( $output ) )
      echo '' . join( ", ", $output ) . '';
  }
	?></i><span><?php the_time('Y/m/d'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt><dd><?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
  $content = mb_substr( strip_tags( $post->post_content ), 0, 50, 'UTF-8' );
  echo $content . '…';
} else {
  echo strip_tags( $post->post_content );
}
?></dd></dl></li>
		<?php endwhile; ?><!--ループ終了-->
<?php else: ?>
	<h2>記事がありません</h2>
<?php endif; ?>	
	</ul>
<?php wp_reset_postdata(); ?>
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