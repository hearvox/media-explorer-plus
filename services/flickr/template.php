<?php

class MEXPPlus_Flickr_Template extends MEXP_Template {

	/**
	 * Template for single element returned from the API.
	 *
	 * Outputs the Backbone template for an item within search results.
	 *
	 * @param  string $id  ID of the view
	 * @param  string $tab Selected tab
	 * @return void
	 */
	public function item( $id, $tab ) {
		?>
		<div id="mexp-item-flickr-<?php echo esc_attr( $tab ); ?>-{{ data.id }}" class="mexp-item-area mexp-item-flickr" data-id="{{ data.id }}">
			<div class="mexp-item-container clearfix">
				<div class="mexp-item-thumb">
					<img src="{{ data.thumbnail }}" >
				</div>
				<div class="mexp-item-main">
					<div class="mexp-item-content">
						{{ data.content }}
					</div>
					<div class="mexp-item-author">
						<i><span class="mexp-item-author-name">{{ data.meta.user.name }}</span></i>
					</div>

					<div class="mexp-item-date">
						{{ data.date }}
					</div>
				</div>
			</div>
		</div>
		<a href="#" id="mexp-check-{{ data.id }}" data-id="{{ data.id }}" class="check" title="<?php esc_attr_e( 'Deselect', 'mexp' ) ?>">
			<div class="media-modal-icon"></div>
		</a>
		<?php
	}

	/**
	 * Outputs the Backbone template for a select item's thumbnail in the footer toolbar.
	 *
	 * @param string $id The template ID.
	 */
	public function thumbnail( $id ) {
		?>
		<?php
	}

	/**
	 * Template for the search form.
	 *
	 * Outputs the Backbone template for a tab's search fields.
	 *
	 * @param  string $id ID of the view
	 * @param  string $tab Selected tab
	 * @return void
	 */
	public function search( $id, $tab ) {
		switch ( $tab ) {
			case 'all':
				?>
				<form action="#" class="mexp-toolbar-container clearfix tab-all">
					<input
						type="text"
						name="text"
						value="{{ data.params.text }}"
						class="mexp-input-text mexp-input-search"
						size="40"
						placeholder="<?php esc_attr_e( 'Search Flickr photos', 'mexpplus' ); ?>">
					<input type="hidden" name="tab" value="all">
					<input class="button button-large" type="submit" value="<?php esc_attr_e( 'Search', 'mexp' ) ?>">
					<div class="spinner"></div>
				</form>
				<?php
				break;
			case 'tags':
				?>
				<form action="#" class="mexp-toolbar-container clearfix tab-tags">
					<input
						type="text"
						name="tags"
						value="{{ data.params.tags }}"
						class="mexp-input-text mexp-input-search"
						size="40"
						placeholder="<?php esc_attr_e( 'Enter tags', 'mexpplus' ); ?>">
					<input type="hidden" name="tab" value="tags">
					<input class="button button-large" type="submit" value="<?php esc_attr_e( 'Search', 'mexp' ) ?>">
					<div class="spinner"></div>
				</form>
				<?php
				break;
			case 'user_id':
				?>
				<form action="#" class="mexp-toolbar-container clearfix tab-user_id">
					<input
						type="text"
						name="user_id"
						value="{{ data.params.user_id }}"
						class="mexp-input-text mexp-input-search"
						size="40"
						placeholder="<?php esc_attr_e( 'Enter Flickr user id', 'mexpplus' ); ?>">
					<input type="hidden" name="tab" value="user_id">
					<input class="button button-large" type="submit" value="<?php esc_attr_e( 'Search', 'mexp' ) ?>">
					<div class="spinner"></div>
				</form>
				<?php
				break;
		}
	}
}
