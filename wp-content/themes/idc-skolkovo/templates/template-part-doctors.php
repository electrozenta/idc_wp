<?php

$values = $cfs->get('doc_list');
if ($values) :

    foreach ($values as $post_id) :
        $the_post = get_post($post_id);
        $post_thumbnail_id = get_post_thumbnail_id($post_id);

        $attachment_src = wp_get_attachment_image_src( $post_thumbnail_id, 'doctor thumbnail', false );

        $attachment_url = $post_thumbnail_id ? $attachment_src[0] : get_template_directory_uri() . "/assets/img/doctor.jpg";
        $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
        $toggle_id = "more-" . $post_id;
        ?>
        <div class="row la-doctor-short">
            <div class="col-sm-3 no-gutter-left">
                <img class="img-responsive" src="<?php echo $attachment_url; ?>" alt="<?php if (count($alt)) echo $alt; ?>"/>
            </div>
            <div class="col-sm-9 no-gutter-right">
                <h4><?php echo $the_post->post_title; ?></h4>
                <h5><?php echo $cfs->get('doc_title', $post_id); ?></h5>
                <p><?php echo $cfs->get('doc_summary', $post_id); ?></p>
                <?php if (trim($the_post->post_content) !== '') : ?>
                    <a href="<?php echo "#" . $toggle_id; ?>" data-toggle="collapse">подробнее</a>
                    <div id="<?php echo $toggle_id; ?>" class="collapse la-bio"><?php echo $the_post->post_content; ?>
                        <a href="<?php echo "#" . $toggle_id; ?>" data-toggle="collapse">назад</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php

    endforeach;
endif;

?>