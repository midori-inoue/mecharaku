<?php get_header(); ?>

<main>
<section id="wrap">
<div id="contents">
<div id="single_top">特集・お知らせ</div>
<section>
<div id="single">
<p><span><?php the_time('Y/m/d'); ?></span><?php $cat = get_the_category(); $cat = $cat[0]; {
echo '<i class="' . $cat->category_nicename . '_n" />';
} ?><?php the_category(','); ?></i></p>
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