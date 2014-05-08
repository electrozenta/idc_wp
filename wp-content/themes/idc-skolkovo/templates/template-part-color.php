<?php
$color = ($post->post_parent ? $cfs->get('child_page_color', $post->post_parent) : $cfs->get('child_page_color'));
?>
<style>
    .la-page-header {
        border-color: <?php echo $color; ?>;
    }
    .la-page-nav {
        border-bottom: 3px solid <?php echo $color; ?>;
    }
    .la-page-nav > li.active > a,
    .la-page-nav > li > a:hover,
    .la-page-nav > li.current-page-ancestor > a {
        color: <?php echo $color; ?>;
        background-color: #fff;
    }

</style>