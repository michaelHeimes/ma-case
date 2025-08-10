<?php
$download_rows = get_sub_field('download_rows') ?? null;

if( $download_rows ):
?>
<section class="module download-rows">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 tablet-10">
				<?php foreach($download_rows as $download_row):
					$resource_link = $download_row['resource_link'] ?? null;
					$description = $download_row['description'] ?? null;
				?>
					<div class="grid-x grid-padding-x">
						<?php if($resource_link):
							$link_url = $resource_link['url'];
							$link_title = $resource_link['title'];
							$link_target = $resource_link['target'] ? $resource_link['target'] : '_self';
						?>
							<div class="link-wrap small-12 medium-4 tablet-3">
								<a class="h3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<u><?php echo esc_html( $link_title ); ?></u>
								</a>
							</div>
						<?php endif;?>
						<?php if($description):?>
							<div class="cell small-12 medium-8 large-8 large-offset-1">
								<p><?=wp_kses_post($description);?></p>
							</div>
						<?php endif;?>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>