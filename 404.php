<?php
/**
 * The template for displaying 404 pages (not found)
 */
 ?>
<?php get_header(); ?>
<main>
<div id="top_wrap">
<h1>404 Not Found</h1><p><img src="<?php echo get_template_directory_uri(); ?>/img/top/back04.png" alt=""/></p>
</div>
<section>
<div id="found">
<h2>ページが見つかりません</h2>
<p>あなたがアクセスしようとしたページは削除されたかURLが変更されているため、<br>見つけることができません。<br>
お手数ですが、以下のリンク先へ移動をお願いします。</p>
<ul>
<li><a href="<?php echo home_url(); ?>">トップページへ戻る</a></li>
<li><a href="<?php echo home_url(); ?>/company">会社概要のページへ</a></li>
</ul>   
</div>    
</section>
<?php get_footer(); ?>
