<?php
if ( has_term('blog', 'blog', $post) ) {
include(TEMPLATEPATH.'/single-blog.php');
}
elseif ( has_term('print', 'print', $post) ) {
include(TEMPLATEPATH.'/single-print.php');
}
else {
include(TEMPLATEPATH.'/single-info.php');
}
?>
