<?php
$color = $cfs->get('child_page_color');
?>
<style>
    .la-page-header {
        border-color: <?php echo $color; ?>;
    }

    .la-page-nav > li.active > a {
        background-color: <?php echo $color; ?>;
    }
</style>