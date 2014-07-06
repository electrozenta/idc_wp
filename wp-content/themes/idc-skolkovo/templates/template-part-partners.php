<div class="row">
    <?php

    $pages = $cfs->get('partners');
    if ($pages) :

        foreach ($pages as $page_id) :
            $page = get_post($page_id);
            $post_thumbnail_id = get_post_thumbnail_id($page_id);
            $attachment_url = wp_get_attachment_url($post_thumbnail_id);
            $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

            if (has_post_thumbnail($page->ID)) :
                ?>
                <div class="col-sm-6 col-md-4">
                    <a class="pull-left" href="<?php echo get_page_link($page->ID); ?>" target="_blank">
                        <img class="media-object" src="<?php echo $attachment_url; ?>" alt="<?php if (count($alt)) echo $alt; ?>">
                        <?php echo $page->post_title; ?>
                    </a>
                </div>
            <?php
            endif;

        endforeach;

    endif;
    ?>

</div>

<script>
    var url = "http://google.com";
</script>