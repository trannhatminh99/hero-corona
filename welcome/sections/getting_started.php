<div class="theme-steps-list-wrap two-col">

	<div class="theme-steps col">
		<div class="step-1-right recommend-col">
			<h3><?php echo esc_html__('Links to Customizer Settings', 'eightmedi-lite'); ?></h3>
			<div class="item-wrap">
				<?php
				$data    = array(
					array(
						'icon' => 'dashicons-format-gallery',
						'text' => __( 'Upload Logo', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'title_tagline' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-align-center',
						'text' => __( 'General Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[panel]' => 'eightmedi_lite_general_setups' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-external',
						'text' => __( 'Header Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'eightmedi_lite_logo_alignment' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-menu',
						'text' => __( 'Menu Options', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'menu_settings_section' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-admin-home',
						'text' => __( 'HomePage Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[panel]' => 'eightmedi_lite_homepage_setups' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-update',
						'text' => __( 'Footer Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'eightmedi_lite_footer_setting' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-format-aside',
						'text' => __( 'Social Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'eightmedi_lite_social_setting' ), admin_url( 'customize.php' ) ),
					),
					array(
						'icon' => 'dashicons-admin-appearance',
						'text' => __( 'Slider Settings', 'eightmedi-lite' ),
						'link' => add_query_arg( array( 'autofocus[section]' => 'eightmedi_lite_slider_setups' ), admin_url( 'customize.php' ) ),
					),
				); 
				foreach ( $data as $customizer_item ) {
					?>
					<div class="ti-customizer-item ">
						<a target="_blank" href="<?php echo esc_url( $customizer_item['link'] ); ?>">
							<i class="dashicons <?php echo esc_attr( $customizer_item['icon']); ?> "></i>
							<?php echo wp_kses_post( $customizer_item['text'] ); ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="step-1-left">
			<h3><?php esc_html_e( 'Step 1 - Follow below actions', 'eightmedi-lite' ); ?></h3>
			<p><?php esc_html_e( 'We\'ve made a checklist for you to take while setting up with our theme. Go through this and you can have your website ready in minutes.', 'eightmedi-lite' ); ?></p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Create a post, post category, page.', 'eightmedi-lite' ); ?> <a target="_blank" href="<?php echo esc_url('https://8degreethemes.com/documentation/general/#creating_a_post_page_and_category'); ?>"><?php esc_html_e( 'Click here if you need help!', 'eightmedi-lite' ); ?></a> </p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Set page you created to load a custom template "Homepage" that came with theme and set it as frontpage.', 'eightmedi-lite' ); ?> <a target="_blank" href="<?php echo esc_url('https://8degreethemes.com/documentation/general/#creating_a_homepage'); ?>"><?php esc_html_e( 'Click here if you need help!', 'eightmedi-lite' ); ?></a> </p>
			<p><span class="dashicons dashicons-yes"></span> <?php esc_html_e( 'Install required/recommerded plugins (if any).', 'eightmedi-lite' ); ?> </p>
			<p><a class="nav-tab recommended_plugins nav-tab-inactive button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=welcome-page#recommended_plugins' ) ); ?>"><?php esc_html_e( 'Click Me to install recommended plugins.', 'eightmedi-lite' ); ?></a>
			</p>
		</div>
	</div><!--/.col-->

	<div class="theme-steps col">
		<h3><?php esc_html_e( 'Step 2 - Import Demo Contents', 'eightmedi-lite' ); ?></h3>
		<p><?php esc_html_e( 'If you like to have a site as similar like our demo then, go to Import Demo tab and do the needfuls.', 'eightmedi-lite' ) ?></p>
		<p><a class="nav-tab demo_import nav-tab-inactive button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=welcome-page#demo_import' ) ); ?>"><?php esc_html_e( 'Click Me to import demo contents.', 'eightmedi-lite' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="theme-steps col">
		<h3><?php esc_html_e( 'Step 3 - Check our documentation', 'eightmedi-lite' ); ?></h3>
		<p><?php esc_html_e( 'Even if you\'re a long-time WordPress user, we still believe you should give our documentation a very quick read.', 'eightmedi-lite' ) ?></p>
		<p>
			<a class="button button-primary" target="_blank" href="<?php echo esc_url( 'https://8degreethemes.com/documentation/eightmedi-lite' ); ?>"><?php esc_html_e( 'Full documentation', 'eightmedi-lite' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="theme-steps col">
		<h3><?php esc_html_e( 'Step 4 - Customize everything', 'eightmedi-lite' ); ?></h3>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'eightmedi-lite' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( admin_url() . 'customize.php' ); ?>"
			class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'eightmedi-lite' ); ?></a>
		</p>
	</div><!--/.col-->

</div>