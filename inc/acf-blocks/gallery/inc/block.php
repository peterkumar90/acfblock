
<?php 
$gallery_heading = get_field('gallery_heading');
?>
    <section class="france_gallery_wp">
		<div class="container_block">
			<div class="gallery_list_block">
				<div class="gallery_title">
					<?php if($gallery_heading): ?><h1><?php echo $gallery_heading; ?></h1><?php endif; ?>
				</div>
                <?php if( have_rows('france_gallery_section') ): ?>
				<div class="gallery_block_box">
                <?php while( have_rows('france_gallery_section') ): the_row(); 
                    $france_gallery_image = get_sub_field('france_gallery_image');
			        $france_gallery_title = get_sub_field('france_gallery_title');
                    $france_gallery_description = get_sub_field('france_gallery_description');
                    $france_gallery_button = get_sub_field('france_gallery_button');
                ?>
					<div class="gallery_block">
						<div class="gallery_block_inner">
							<div class="gallery_icon">
                            <?php if(!empty($france_gallery_image)): ?>
								<img src="<?php echo esc_url($france_gallery_image['url']); ?>" alt="<?php echo esc_attr($france_gallery_image['alt']); ?>">
                            <?php endif; ?>
							</div>
							<?php if($france_gallery_title): ?><h3><?php echo $france_gallery_title; ?></h3><?php endif; ?>
                            <?php if($france_gallery_description): ?>
                            <div class="gallery_text">
                                <p><?php echo $france_gallery_description; ?></p>
                            </div>
                            <?php endif; ?>
                            <?php
                             if( $france_gallery_button ): 
                                $france_gallery_button_url = $france_gallery_button['url'];
                                $france_gallery_button_title = $france_gallery_button['title'];
                            ?>
                            <a href="<?php echo esc_url( $france_gallery_button_url ); ?>" class="read_more_btn">
                                <?php echo esc_html( $france_gallery_button_title ); ?>
                            </a>
                            <?php endif; ?>
						</div>
					</div>
                <?php endwhile; ?>
				</div>
                <?php endif; ?>
			</div>
		</div>
	</section>