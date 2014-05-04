<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        if ($post->post_content != "") :
            the_content('(Read more...)');
        endif;
    endwhile;
else:
    echo '<blockquote>Houston, we have a problem.</blockquote>';
endif;