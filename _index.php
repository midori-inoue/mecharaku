<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<h1>特集・お知らせ</h1>
<p>めちゃ楽のお得情報やお知らせです。</p>
<section>
<div id="info">
<?php
  if(is_category()):
    $archive_title = single_cat_title('', false).'のカテゴリー一覧';
    $archive_description = category_description();
  elseif(is_tag()):
    $archive_title = single_cat_title('', false).'のカテゴリー一覧';
    $archive_description = tag_description();
  elseif(is_year()):
    $archive_title = get_the_time("Y年").'の特集・お知らせ一覧';
  elseif(is_month()):
    $archive_title = get_the_time("Y年m月").'の特集・お知らせ一覧';
  elseif(is_day()):
    $archive_title = get_the_time("Y年m月d日").'の特集・お知らせ一覧';
  elseif(is_author()):
    $author_id = get_query_var('author');
    $author_name = get_the_author_meta( 'display_name', $author_id );
    $archive_title = $author_name.'の特集・お知らせ一覧';
  endif;
 
  if(!empty($archive_title)):
    echo '<h2>'.$archive_title.'</h2>';
  endif;
  ?>
<ul>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<li><div><?php $cat = get_the_category(); $cat = $cat[0]; {
echo '<i class="' . $cat->category_nicename . '_n" />';
} ?><?php the_category(','); ?></i><span><?php the_time('Y/m/d'); ?></span></div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?><!--ループ終了-->
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