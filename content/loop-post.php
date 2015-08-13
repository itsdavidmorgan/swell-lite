<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BEGIN .post-holder -->
<div class="post-holder shadow radius-full">

	<!-- BEGIN .article -->
	<div class="article">
		
		<?php if (get_theme_mod('display_date_blog', '1') == '1') { ?>
			<div class="post-date">
				<p><i class="fa fa-comment"></i> <a href="<?php the_permalink(); ?>#comments"><?php comments_number( esc_html__("Leave a Comment", 'swelllite'), esc_html__("1 Comment", 'swelllite'), '% Comments'); ?></a></p>
				<p><i class="fa fa-clock-o"></i> <?php esc_html_e("Posted on", 'swelllite'); ?> <?php the_time( esc_html__("F j, Y", 'swelllite') ); ?></p>
			</div>
		<?php } ?>
		
		<?php if ( get_theme_mod('display_feature_post') == '' || ! has_post_thumbnail() ) { ?>
			<h1 class="headline"><?php the_title(); ?></h1>
		<?php } ?>
		
		<?php if (get_theme_mod('display_author_blog', '1') == '1') { ?>
			<div class="post-author">
				<p><?php esc_html_e("by", 'swelllite'); ?> <?php esc_url ( the_author_posts_link() ); ?></p>
			</div>
		<?php } ?>
		
		<span class="divider-small"></span>
		
		<?php the_content(); ?>
		
		<?php wp_link_pages(array(
			'before' => '<p class="page-links"><span class="link-label">' . esc_html__('Pages:', 'swelllite') . '</span>',
			'after' => '</p>',
			'link_before' => '<span>',
			'link_after' => '</span>',
			'next_or_number' => 'next_and_number',
			'nextpagelink' => esc_html__('Next', 'swelllite'),
			'previouspagelink' => esc_html__('Previous', 'swelllite'),
			'pagelink' => '%',
			'echo' => 1 )
		); ?>
		
		<!-- BEGIN .post-meta -->
		<div class="post-meta">
		
			<p><i class="fa fa-bars"></i> <?php esc_html_e("Category:", 'swelllite'); ?> <?php the_category(', '); ?><?php $tag_list = get_the_tag_list( esc_html__( ", ", 'swelllite' ) ); if ( ! empty( $tag_list ) ) { ?> <i class="fa fa-tags"></i> <?php esc_html_e("Tags:", 'swelllite'); ?> <?php the_tags(''); ?><?php } ?></p>
		
		<!-- END .post-meta -->
		</div>
		
		<!-- BEGIN .post-navigation -->
		<div class="post-navigation">
			<div class="previous-post"><?php previous_post_link('&larr; %link'); ?></div>
			<div class="next-post"><?php next_post_link('%link &rarr;'); ?></div>
		<!-- END .post-navigation -->
		</div>
	
	<!-- END .article -->
	</div>

<!-- END .post-holder -->
</div>

<?php if ( comments_open() || '0' != get_comments_number() ) comments_template(); ?>

<div class="clear"></div>

<?php endwhile; else: ?>

<!-- BEGIN .post-holder -->
<div class="post-holder shadow radius-full">

	<!-- BEGIN .article -->
	<div class="article">
	
		<div class="error-404">
			<h1 class="headline"><?php esc_html_e("No Posts Found", 'swelllite'); ?></h1>
			<p><?php esc_html_e("We're sorry, but the post was not found.", 'swelllite'); ?></p>
		</div>
		
	<!-- END .article -->
	</div>

<!-- END .post-holder -->
</div>

<?php endif; ?>