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
                    <div class="content archive-content">
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
</div>
<?php get_footer(); ?>