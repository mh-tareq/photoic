<?php get_header(); ?>
<?php get_template_part('template-parts/navigation') ?>
<div class="container">


    <?php $query = new WP_Query(array(
        'post__not_in' => get_option('sticky_posts')
    ));
    ?>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <figure class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? 9 : 12 ?> single-images">
                                <?php echo get_the_post_thumbnail($post, 'large') ?>
                                <div class="title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="meta-info">
                                    <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                            <?php the_author(); ?>
                                        </a> |
                                        On <?php the_date(); ?>
                                    </p>
                                </div>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </figure>

                    <?php endwhile;
                    endif; ?>
                    <div class="col-md-3">
                        <?php if (is_active_sidebar('primary-sidebar')) { ?>
                            <?php dynamic_sidebar('primary-sidebar'); ?>
                        <?php } ?>
                    </div>
                </div>
                <a class="back-btn" href="<?php echo site_url(); ?>">Back</a>

            </div>
        </div>
    </div>
    <!---comment box-->
    <div class="comments">
        <?php
        echo comments_template()
        ?>
    </div>
</div>
<?php get_footer(); ?>