<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<meta name="robots" content="noindex,nofollow" />
<?php /*titleタグの設定*/?>
<?php /*▼トップページの場合▼*/
if(is_home()): ?>
<title>トップページ｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>

<?php /*▼デフォルトの「固定ページ」の場合▼*/
elseif(is_page()): ?>
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>

 <?php /*▼404ページの場合▼*/
elseif(is_404()): ?>
<title>ページが見つかりませんでした｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>

<?php /*▼カスタム投稿タイプ「blog」の場合▼*/
elseif( is_post_type_archive('blog')): ?>
<title>ブログ｜<?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title> 

<?php /*▼カスタム投稿タイプ「blog」のタームアーカイブページの場合▼*/
elseif( is_tax('blog-cat')): ?>
<title>ブログ｜<?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title> 

<?php /*▼デフォルトの「投稿」の場合▼*/
elseif(is_single()): ?>
<title>特集・お知らせ｜<?php the_title(); ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title> 

<?php /*▼デフォルトの「カテゴリー」に属する記事一覧ページの場合▼*/
elseif(is_category()): ?>
<?php $cat = get_the_category();$catid = $cat[0]->cat_ID;$getCatURL = get_category_link( $catid );$catName = $cat[0]->name;$catCnt = $cat[0]->category_count; ?>
<title><?php echo $catName; ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
 
<?php /*▼デフォルトの「タグ」に属する記事一覧ページの場合▼*/
elseif(is_tag()): ?>
<?php $tag = get_the_tags();$tagName = $tag[0]->name;$tagId = $tag[0]->term_id;$tagURL = get_tag_link($tagId);$tagCnt = $tag[0]->count; ?>
<title><?php echo $tagName; ?>｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
    
<?php /*▼上記いずれにも属さないページの場合▼*/
else: ?>
<title>特集・お知らせ｜<?php bloginfo('name'); ?>　<?php bloginfo('description'); ?></title>
 
<?php endif; ?>
<link rel="icon" href="<?php echo get_template_directory_uri();?>/img/top/favicon.ico" sizes="any"><!-- 32×32 -->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/top/favicon.ico"><!-- 180×180 -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->

    
    
<?php if( is_post_type_archive('blog')): ?><!--カスタム投稿タイプ「blog」のアーカイブページの場合--><!--カスタム投稿タイプはデフォルトのarchiveより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/blog.css" rel="stylesheet" type="text/css">
<?php elseif( is_tax('blog-cat')): ?><!--カスタム投稿タイプ「blog」のタームアーカイブページの場合--><!--カスタム投稿タイプはデフォルトのarchiveより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/blog.css" rel="stylesheet" type="text/css">
<?php elseif( is_singular('blog') ) : ?><!--カスタム投稿タイプ「blog」の詳細ページの場合--><!--カスタム投稿タイプはデフォルトのsingleより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/single_blog.css" rel="stylesheet" type="text/css">
<?php elseif( is_post_type_archive('print')): ?><!--カスタム投稿タイプ「print」のアーカイブページの場合--><!--カスタム投稿タイプはデフォルトのarchiveより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/print.css" rel="stylesheet" type="text/css">
<?php elseif( is_tax('print-cat')): ?><!--カスタム投稿タイプ「print」のタームアーカイブページの場合--><!--カスタム投稿タイプはデフォルトのarchiveより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/print.css" rel="stylesheet" type="text/css">
<?php elseif( is_singular('print') ) : ?><!--カスタム投稿タイプ「print」の詳細ページの場合--><!--カスタム投稿タイプはデフォルトのsingleより前に記述-->
    <link href="<?php echo get_template_directory_uri();?>/css/single_print.css" rel="stylesheet" type="text/css">
<?php elseif( is_archive() ) : ?><!--アーカイブページの場合-->
    <link href="<?php echo get_template_directory_uri();?>/css/info.css" rel="stylesheet" type="text/css">
<?php elseif( is_single() ): ?> <!--シングルページの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/single.css" rel="stylesheet" type="text/css">
<?php elseif( is_404()) : ?> <!--404ページの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/404.css" rel="stylesheet" type="text/css"> 
<?php elseif( is_page('company') ) : ?> <!--会社概要の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/company.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('contact') ) : ?> <!--お問合せの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('thanks') ) : ?> <!--お問合せ（送信完了）の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('booklet') ) : ?> <!--冊子一覧の場合-->
<link href="<?php echo get_template_directory_uri(); ?>/css/booklet.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('envelope') ) : ?> <!--封筒一覧の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/envelope.css" rel="stylesheet" type="text/css">
<?php elseif( is_page('slip') ) : ?> <!--伝票一覧の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/slip.css" rel="stylesheet" type="text/css">

<?php elseif( is_page('slip_mecha') ) : ?> <!--めちゃ楽伝票の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/slip_mecha.css" rel="stylesheet" type="text/css">	
	
<?php elseif( is_page('slip_pro') ) : ?> <!--めちゃ楽プロ伝票の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/slip_pro.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('slip_so') ) : ?> <!--そっくり伝票の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/slip_so.css" rel="stylesheet" type="text/css">
  
<?php elseif( is_page('envelope_mecha') ) : ?> <!--めちゃ楽封筒の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/envelope_mecya.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('envelope_so') ) : ?> <!--そっくり封筒の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/envelope_so.css" rel="stylesheet" type="text/css">
  
<?php elseif( is_page('slip_envelope_thanks') ) : ?> <!--そっくり伝票・そっくり封筒（送信完了）の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css">
    
<?php elseif( is_page('envelope_to') ) : ?> <!--特色封筒の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/envelope_to.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('booklet_mecha') ) : ?> <!--めちゃ楽冊子の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/booklet_mecya.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('booklet_pro') ) : ?> <!--めちゃ楽冊子の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/booklet_pro.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('rules') ) : ?> <!--利用規約の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/rules.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('law') ) : ?> <!--特定取引に基づく表記の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/law.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('policy') ) : ?> <!--個人情報の取り扱いの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/policy.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('cookie') ) : ?> <!--cookieポリシーの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/cookie.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('security') ) : ?> <!--情報セキュリティ基本方針の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/security.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('guide') ) : ?> <!--ご利用ガイドの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/guide.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('question') ) : ?> <!--よくある質問の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/question.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('dont_know') ) : ?> <!--分からない方の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/dont_know.css" rel="stylesheet" type="text/css">
	
<?php elseif( is_page('product') ) : ?> <!--商品一覧の場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/product.css" rel="stylesheet" type="text/css">
	

	
<?php else: ?><!--以外のページの処理-->
<link href="<?php echo get_template_directory_uri(); ?>/css/info.css" rel="stylesheet" type="text/css">
<?php endif; ?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body>

<header>
<div id="header_inner">
<div id="top_logo"><div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/base/top_logo_b.png" width="562" height="170" alt="めちゃ楽PRINT　「困った」をなんとかする印刷サイト"/></a></div><figure><img src="<?php echo get_template_directory_uri();?>/img/base/top_logo_c.png" alt="最短出荷3営業日"/></figure></div>
<div  id="top_tel">
<p><a href="tel:0792613338"><img src="<?php echo get_template_directory_uri();?>/img/base/tel.png" alt="079-261-3338"/></a>10:00～18:00（定休日：土日祝）</p>
<ul><li><a href="https://sakupuri.jp/systems/login/"><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512"><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>マイページ</a></li><li><a href="https://sakupuri.jp/systems/cart/"><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 576 512"><style>svg{fill:#ffffff}</style><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>カートを見る</a></li></ul>
</div>
</div>
<nav id="menuList">
<!--▼ グローバルナビゲーション -->
	<?php wp_nav_menu( array(
      'theme_location' => 'header-nav',
      'container' => 'ul',
      'container_class' => '',
      'container_id' => '',
	'menu_id' => '',
    'menu_class' => '',
      'fallback_cb' => ''
) ); ?>    
</nav><!-- /#menuList -->
<div id="sp"></div>
<?php wp_head(); ?><!--システム・プラグイン用-->
</header>