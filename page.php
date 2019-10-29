<?php get_header(); ?>
<?php get_template_part('template-parts/navigation') ?>
<div class="container">
    <div class="row">
        <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? 9 : 12 ?>">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

            <?php endwhile;
            endif; ?>
        </div>
        <div class="col-md-3">
            <?php if (is_active_sidebar('primary-sidebar')) { ?>
                <?php dynamic_sidebar('primary-sidebar'); ?>
            <?php } ?>
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