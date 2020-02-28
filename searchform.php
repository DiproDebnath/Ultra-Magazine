
	<div class="search-overlay" id="searchoverlay">
		<div class="search-overlay-inner">
			<a href="#">
				<span class="search-overlay-close-button">
					<span class="fa fa-close"></span>
				</span>
			</a>
			<form method="get" class="search-form search-overlay-form" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text"
					   class="search-input"
					   name="s"
					   autocomplete="off"
					   id="s"
					   placeholder="<?php esc_attr_e( 'Search...', 'entrenamiento' ); ?>"
				/>
				<label for="s" class="search-label" ><?php _e( 'Find the post', 'entrenamiento' ); ?></label>
			</form>
		</div>
	</div>





