<?php
/**
 * Admin Notices.
 *
 * @package cyr-to-lat
 */

namespace Cyr_To_Lat;

/**
 * Class Admin_Notices
 *
 * @class Admin_Notices
 */
class Admin_Notices {

	/**
	 * Admin notices array.
	 *
	 * @var array
	 */
	private $notices = [];

	/**
	 * Admin_Notices constructor.
	 */
	public function __construct() {
		add_action( 'admin_notices', [ $this, 'show_notices' ] );
	}

	/**
	 * Add admin notice.
	 *
	 * @param string $message Message to show.
	 * @param string $class   Message class: notice notice-success notice-error notice-warning notice-info
	 *                        is-dismissible.
	 * @param array  $options Notice options.
	 */
	public function add_notice( $message, $class = 'notice', $options = [] ) {
		$this->notices[] = [
			'message' => $message,
			'class'   => $class,
			'options' => $options,
		];
	}

	/**
	 * Show all notices.
	 */
	public function show_notices() {
		foreach ( $this->notices as $notice ) {
			if ( ! $this->is_screen_allowed( $notice ) ) {
				continue;
			}

			?>
			<div class="<?php echo esc_attr( $notice['class'] ); ?>">
				<p>
					<strong>
						<?php echo wp_kses_post( $notice['message'] ); ?>
					</strong>
				</p>
			</div>
			<?php
		}
	}

	/**
	 * Is current admin screen allowed to show the notice.
	 *
	 * @param array $notice Notice.
	 *
	 * @return bool
	 */
	protected function is_screen_allowed( $notice ) {
		$screen_ids = isset( $notice['options']['screen_ids'] ) ? (array) $notice['options']['screen_ids'] : null;
		if ( empty( $screen_ids ) ) {
			return true;
		}

		$current_screen = get_current_screen();

		foreach ( $screen_ids as $screen_id ) {
			if ( $current_screen && $screen_id === $current_screen->id ) {
				return true;
			}
		}

		return false;
	}
}
