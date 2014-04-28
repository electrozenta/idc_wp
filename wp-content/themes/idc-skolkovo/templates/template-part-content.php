<?php
if (have_posts()) : while (have_posts()) : the_post();
    if ($post->post_content != "") :
        ?>
        <?php the_content('(Read more...)'); ?>
    <?php endif; endwhile; else: ?>
    <blockquote>Houston, we have a problem.</blockquote>
<?php endif; ?>