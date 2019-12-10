<?php
/*
Template name: Stuffed Toys
*/
?>


<?php
    get_header();
?>

<div class="toys">
    <div class="container">
        <h2 class="subtitle">Stuffed toys</h2>
        <div class="toys__wrapper">
        <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'category_name' => 'stuffed-toys',
                'orderby' => 'date',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true,
            ) );

            foreach( $posts as $post) {
                setup_postdata($post);
                ?>
                <div class="toys__item" style="background-image: url(<?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail_url();
                    } else{
                        echo get_template_directory_uri(  ) . '/assets/img/not-found.jpg';
                    }
                ?>)">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('toy_descr'); ?>                            
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">More details</a>
                    </div>
                </div>
            <?php
                }

            wp_reset_postdata();
        ?>
    </div>
</div>

<?php
    get_footer();
?>