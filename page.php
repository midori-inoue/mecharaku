  <?php get_header(); ?>

<main <?php post_class( 'kiji' ); ?>>
<figure><?php
// プロフィールページで設定した画像を取得
$profileImage = get_field('pagetop');
if( !empty( $profileImage ) ): ?>
  <img src="<?php echo esc_url($profileImage['url']); ?>" alt="<?php echo esc_attr($profileImage['alt']); ?>" />
<?php endif; ?></figure>
<section id="wrap">
<div id="contents">
<?php if(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</section>
</main>

<?php get_footer(); ?>
