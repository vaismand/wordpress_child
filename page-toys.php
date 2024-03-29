<?php
/*
Template name: Toys
*/
?>

<?php
    get_header();
?>

<div class="toys">
    <div class="container">
        <a class="subtitle" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Stuffed Toys' ) ) ); ?>" >Stuffed toys</a>
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

        <a class="subtitle" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Educational toys' ) ) ); ?>" >Educational toys</a>
        <div class="toys__wrapper">
            <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name' => 'edu-toys',
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
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span><?php the_field('cant_find_title'); ?></span> <?php the_field('cant_find'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>