<?php
/**
 * Custom Widgets
 *
 * @package foodylite
 */

/**
 * Social Links
 *
 * @since foodylite 1.0
 */
class foodylite_social extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-social', 'description' => esc_html__( 'Show Icons of your Social Links.', 'foodylite' ) );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'foodylite_social' );

		/* Create the widget. */
		parent::__construct( 'foodylite_social', esc_html__( 'Social Links (FoodyLite)', 'foodylite' ), $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$feed = ! empty( $instance['feed'] ) ? $instance['feed'] : '';
		$email = ! empty( $instance['email'] ) ? $instance['email'] : '';
		$linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$bloglovin = ! empty( $instance['bloglovin'] ) ? $instance['bloglovin'] : '';
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
		$facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
		$googleplus = ! empty( $instance['googleplus'] ) ? $instance['googleplus'] : '';
		$pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		$instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '';
		$flickr = ! empty( $instance['flickr'] ) ? $instance['flickr'] : '';
		$youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '';
		$vimeo = ! empty( $instance['vimeo'] ) ? $instance['vimeo'] : '';
		$dribbble = ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : '';
		$behance = ! empty( $instance['behance'] ) ? $instance['behance'] : '';
		$github = ! empty( $instance['github'] ) ? $instance['github'] : '';
		$skype = ! empty( $instance['skype'] ) ? $instance['skype'] : '';
		$tumblr = ! empty( $instance['tumblr'] ) ? $instance['tumblr'] : '';
		$wordpress = ! empty( $instance['wordpress'] ) ? $instance['wordpress'] : '';
		$soundcloud = ! empty( $instance['soundcloud'] ) ? $instance['soundcloud'] : '';
		$medium = ! empty( $instance['medium'] ) ? $instance['medium'] : '';
		$snapchat = ! empty( $instance['snapchat'] ) ? $instance['snapchat'] : '';


		/* Before widget (defined by themes). */
		echo wp_kses_post($before_widget);

		if ( $title )
			echo wp_kses_post($before_title) . esc_html($title) . wp_kses_post($after_title);

		if ( $feed )
			echo '<span><a href="' . esc_url($feed) . '" title="' . esc_attr( 'Feed', 'foodylite' ) . '" class="social social-feed" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $email )
			echo '<span><a href="mailto:' . esc_url($email) . '" title="' . esc_attr( 'Email', 'foodylite' ) . '" class="social social-email" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $linkedin )
			echo '<span><a href="' . esc_url($linkedin) . '" title="' . esc_attr( 'Linkedin', 'foodylite' ) . '" class="social social-linkedin" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';
		
		if ( $bloglovin )
			echo '<span><a href="' . esc_url($bloglovin) . '" title="' . esc_attr( 'Bloglovin', 'foodylite' ) . '" class="social social-bloglovin" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $twitter )
			echo '<span><a href="' . esc_url($twitter) . '" title="' . esc_attr( 'Twitter', 'foodylite' ) . '" class="social social-twitter" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $facebook )
			echo '<span><a href="' . esc_url($facebook) . '" title="' . esc_attr( 'Facebook', 'foodylite' ) . '" class="social social-facebook" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $googleplus )
			echo '<span><a href="' . esc_url($googleplus) . '" title="' . esc_attr( 'Googleplus', 'foodylite' ) . '" class="social social-googleplus" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $pinterest )
			echo '<span><a href="' . esc_url($pinterest) . '" title="' . esc_attr( 'Pinterest', 'foodylite' ) . '" class="social social-pinterest" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $instagram )
			echo '<span><a href="' . esc_url($instagram) . '" title="' . esc_attr( 'Instagram', 'foodylite' ) . '" class="social social-instagram" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $flickr )
			echo '<span><a href="' . esc_url($flickr) . '" title="' . esc_attr( 'Flickr', 'foodylite' ) . '" class="social social-flickr" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $youtube )
			echo '<span><a href="' . esc_url($youtube) . '" title="' . esc_attr( 'Youtube', 'foodylite' ) . '" class="social social-youtube" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $vimeo )
			echo '<span><a href="' . esc_url($vimeo) . '" title="' . esc_attr( 'Vimeo', 'foodylite' ) . '" class="social social-vimeo" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $dribbble )
			echo '<span><a href="' . esc_url($dribbble) . '" title="' . esc_attr( 'Dribbble', 'foodylite' ) . '" class="social social-dribbble" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $behance )
			echo '<span><a href="' . esc_url($behance) . '" title="' . esc_attr( 'Behance', 'foodylite' ) . '" class="social social-behance" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $github )
			echo '<span><a href="' . esc_url($github) . '" title="' . esc_attr( 'Github', 'foodylite' ) . '" class="social social-github" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $skype )
			echo '<span><a href="' . esc_url($skype) . '" title="' . esc_attr( 'Skype', 'foodylite' ) . '" class="social social-skype" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $tumblr )
			echo '<span><a href="' . esc_url($tumblr) . '" title="' . esc_attr( 'Tumblr', 'foodylite' ) . '" class="social social-tumblr" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $wordpress )
			echo '<span><a href="' . esc_url($wordpress) . '" title="' . esc_attr( 'Wordpress', 'foodylite' ) . '" class="social social-wordpress" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $soundcloud )
			echo '<span><a href="' . esc_url($soundcloud) . '" title="' . esc_attr( 'Soundcloud', 'foodylite' ) . '" class="social social-soundcloud" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $medium )
			echo '<span><a href="' . esc_url($medium) . '" title="' . esc_attr( 'Medium', 'foodylite' ) . '" class="social social-pk-medium" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';

		if ( $snapchat )
			echo '<span><a href="' . esc_url($snapchat) . '" title="' . esc_attr( 'Snapchat', 'foodylite' ) . '" class="social social-snapchat" target="' . esc_attr( '_blank', 'foodylite' ) . '"></a></span>';
		
		/* After widget (defined by themes). */
		echo wp_kses_post($after_widget);
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';

		$feed = ! empty( $instance['feed'] ) ? $instance['feed'] : '';
		$email = ! empty( $instance['email'] ) ? $instance['email'] : '';
		$linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		$bloglovin = ! empty( $instance['bloglovin'] ) ? $instance['bloglovin'] : '';
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
		$facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
		$googleplus = ! empty( $instance['googleplus'] ) ? $instance['googleplus'] : '';
		$pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		$instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '';
		$flickr = ! empty( $instance['flickr'] ) ? $instance['flickr'] : '';
		$youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '';
		$vimeo = ! empty( $instance['vimeo'] ) ? $instance['vimeo'] : '';
		$dribbble = ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : '';
		$behance = ! empty( $instance['behance'] ) ? $instance['behance'] : '';
		$github = ! empty( $instance['github'] ) ? $instance['github'] : '';
		$skype = ! empty( $instance['skype'] ) ? $instance['skype'] : '';
		$tumblr = ! empty( $instance['tumblr'] ) ? $instance['tumblr'] : '';
		$wordpress = ! empty( $instance['wordpress'] ) ? $instance['wordpress'] : '';
		$soundcloud = ! empty( $instance['soundcloud'] ) ? $instance['soundcloud'] : '';
		$medium = ! empty( $instance['medium'] ) ? $instance['medium'] : '';
		$snapchat = ! empty( $instance['snapchat'] ) ? $instance['snapchat'] : '';
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'feed' ) ); ?>"><?php esc_html_e('Feed:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'feed' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'feed' ) ); ?>" value="<?php echo esc_url( $feed ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_html_e('Email:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" value="<?php echo esc_url( $email ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e('Linkedin:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" value="<?php echo esc_url( $linkedin ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>"><?php esc_html_e('Bloglovin:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bloglovin' ) ); ?>" value="<?php echo esc_url( $bloglovin ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e('Twitter:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" value="<?php echo esc_url( $twitter ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e('Facebook:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" value="<?php echo esc_url( $facebook ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>"><?php esc_html_e('Googleplus:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'googleplus' ) ); ?>" value="<?php echo esc_url( $googleplus ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e('Pinterest:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" value="<?php echo esc_url( $pinterest ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e('Instagram:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" value="<?php echo esc_url( $instagram ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e('Flickr:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" value="<?php echo esc_url( $flickr ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e('Youtube:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" value="<?php echo esc_url( $youtube ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php esc_html_e('Vimeo:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" value="<?php echo esc_url( $vimeo ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e('Dribbble:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" value="<?php echo esc_url( $dribbble ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>"><?php esc_html_e('Behance:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'behance' ) ); ?>" value="<?php echo esc_url( $behance ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>"><?php esc_html_e('Github:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'github' ) ); ?>" value="<?php echo esc_url( $github ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'skype' ) ); ?>"><?php esc_html_e('Skype:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'skype' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'skype' ) ); ?>" value="<?php echo esc_url( $skype ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e('Tumblr:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" value="<?php echo esc_url( $tumblr ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'wordpress' ) ); ?>"><?php esc_html_e('Wordpress:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'wordpress' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wordpress' ) ); ?>" value="<?php echo esc_url( $wordpress ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>"><?php esc_html_e('Soundcloud:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'soundcloud' ) ); ?>" value="<?php echo esc_url( $soundcloud ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'medium' ) ); ?>"><?php esc_html_e('Medium:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'medium' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'medium' ) ); ?>" value="<?php echo esc_url( $medium ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>"><?php esc_html_e('Snapchat:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'snapchat' ) ); ?>" value="<?php echo esc_url( $snapchat ); ?>" style="width:100%;" />
		</p>

		<?php
	}


	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		$instance['feed'] = ( ! empty( $new_instance['feed'] ) ) ? esc_url_raw( $new_instance['feed'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? esc_url_raw( $new_instance['email'] ) : '';
		$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? esc_url_raw( $new_instance['linkedin'] ) : '';
		$instance['bloglovin'] = ( ! empty( $new_instance['bloglovin'] ) ) ? esc_url_raw( $new_instance['bloglovin'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? esc_url_raw( $new_instance['twitter'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? esc_url_raw( $new_instance['facebook'] ) : '';
		$instance['googleplus'] = ( ! empty( $new_instance['googleplus'] ) ) ? esc_url_raw( $new_instance['googleplus'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? esc_url_raw( $new_instance['pinterest'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? esc_url_raw( $new_instance['instagram'] ) : '';
		$instance['flickr'] = ( ! empty( $new_instance['flickr'] ) ) ? esc_url_raw( $new_instance['flickr'] ) : '';
		$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? esc_url_raw( $new_instance['youtube'] ) : '';
		$instance['vimeo'] = ( ! empty( $new_instance['vimeo'] ) ) ? esc_url_raw( $new_instance['vimeo'] ) : '';
		$instance['dribbble'] = ( ! empty( $new_instance['dribbble'] ) ) ? esc_url_raw( $new_instance['dribbble'] ) : '';
		$instance['behance'] = ( ! empty( $new_instance['behance'] ) ) ? esc_url_raw( $new_instance['behance'] ) : '';
		$instance['github'] = ( ! empty( $new_instance['github'] ) ) ? esc_url_raw( $new_instance['github'] ) : '';
		$instance['skype'] = ( ! empty( $new_instance['skype'] ) ) ? esc_url_raw( $new_instance['skype'] ) : '';
		$instance['tumblr'] = ( ! empty( $new_instance['tumblr'] ) ) ? esc_url_raw( $new_instance['tumblr'] ) : '';
		$instance['wordpress'] = ( ! empty( $new_instance['wordpress'] ) ) ? esc_url_raw( $new_instance['wordpress'] ) : '';
		$instance['soundcloud'] = ( ! empty( $new_instance['soundcloud'] ) ) ? esc_url_raw( $new_instance['soundcloud'] ) : '';
		$instance['medium'] = ( ! empty( $new_instance['medium'] ) ) ? esc_url_raw( $new_instance['medium'] ) : '';
		$instance['snapchat'] = ( ! empty( $new_instance['snapchat'] ) ) ? esc_url_raw( $new_instance['snapchat'] ) : '';

		return $instance;
	}

}

function foodylite_social_register() {
    register_widget( 'foodylite_social' );
}
add_action( 'widgets_init', 'foodylite_social_register' );

/**
 * About Widget
 *
 * @since foodylite 1.0
 */
class foodylite_about extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-about', 'description' => esc_html__( 'About Widget with your image and description.', 'foodylite' ) );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'foodylite_about' );

		/* Create the widget. */
		parent::__construct( 'foodylite_about', esc_html__( 'About (FoodyLite)', 'foodylite' ), $widget_ops, $control_ops );

		add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
	}

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', get_template_directory_uri() . '/js/upload-media.js', array('jquery'));

        wp_enqueue_style('thickbox');
    }

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$image = ! empty( $instance['image'] ) ? $instance['image'] : '';
		$imagealt = ! empty( $instance['imagealt'] ) ? $instance['imagealt'] : '';
		$imagewidth = ! empty( $instance['imagewidth'] ) ? $instance['imagewidth'] : '';
		$imageheight = ! empty( $instance['imageheight'] ) ? $instance['imageheight'] : '';
		$aboutdescription = ! empty( $instance['aboutdescription'] ) ? $instance['aboutdescription'] : '';
		$abouturltext = ! empty( $instance['abouturltext'] ) ? $instance['abouturltext'] : '';
		$abouturl = ! empty( $instance['abouturl'] ) ? $instance['abouturl'] : '';

		echo wp_kses_post($args['before_widget']);
		?>

			<div class="about">
				<div class="widget-image">
					<a href="<?php echo esc_url( $abouturl ); ?>"><img src="<?php echo esc_url( $image ); ?>" width="<?php echo esc_attr( $imagewidth ); ?>" height="<?php echo esc_attr( $imageheight ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>"></a>
				</div>

				<?php if($title != '') echo '<h5 class="widget-title">'. esc_html( $title ).'</h5>'; ?>
				
				<div class="about-description">
					<p><?php echo esc_html( $aboutdescription ); ?></p>
					<p><a href="<?php echo esc_url( $abouturl ); ?>"><?php echo esc_html( $abouturltext ); ?></a></p>
				</div>
			</div>

		<?php
		echo wp_kses_post($args['after_widget']);
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		$instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
		$instance['imagealt'] = ( ! empty( $new_instance['imagealt'] ) ) ? strip_tags( $new_instance['imagealt'] ) : '';
		$instance['imagewidth'] = ( ! empty( $new_instance['imagewidth'] ) ) ? strip_tags( $new_instance['imagewidth'] ) : '';
		$instance['imageheight'] = ( ! empty( $new_instance['imageheight'] ) ) ? strip_tags( $new_instance['imageheight'] ) : '';
		$instance['aboutdescription'] = ( ! empty( $new_instance['aboutdescription'] ) ) ? strip_tags( $new_instance['aboutdescription'] ) : '';
		$instance['abouturltext'] = ( ! empty( $new_instance['abouturltext'] ) ) ? strip_tags( $new_instance['abouturltext'] ) : '';
		$instance['abouturl'] = ( ! empty( $new_instance['abouturl'] ) ) ? strip_tags( $new_instance['abouturl'] ) : '';

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';

		$image = ! empty( $instance['image'] ) ? $instance['image'] : '';
		$imagealt = ! empty( $instance['imagealt'] ) ? $instance['imagealt'] : '';
		$imagewidth = ! empty( $instance['imagewidth'] ) ? $instance['imagewidth'] : '';
		$imageheight = ! empty( $instance['imageheight'] ) ? $instance['imageheight'] : '';
		$aboutdescription = ! empty( $instance['aboutdescription'] ) ? $instance['aboutdescription'] : '';
		$abouturltext = ! empty( $instance['abouturltext'] ) ? $instance['abouturltext'] : '';
		$abouturl = ! empty( $instance['abouturl'] ) ? $instance['abouturl'] : '';
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" style="width:100%;" />
		</p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>"><?php esc_html_e( 'Image:','foodylite' ); ?></label>
            <input name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" class="widefat" type="text" size="36" value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'imagealt' ) ); ?>"><?php esc_html_e('Image ALT:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'imagealt' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'imagealt' ) ); ?>" value="<?php echo esc_attr( $imagealt ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'imagewidth' ) ); ?>"><?php esc_html_e('Image Width:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'imagewidth' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'imagewidth' ) ); ?>" value="<?php echo esc_attr( $imagewidth ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'imageheight' ) ); ?>"><?php esc_html_e('Image Height:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'imageheight' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'imageheight' ) ); ?>" value="<?php echo esc_attr( $imageheight ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'aboutdescription' ) ); ?>"><?php esc_html_e('About Description:','foodylite'); ?></label>
			<textarea id="<?php echo esc_attr( $this->get_field_id( 'aboutdescription' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'aboutdescription' ) ); ?>" rows="12" cols="20" style="width:100%;"><?php echo esc_attr( $aboutdescription ); ?></textarea>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'abouturltext' ) ); ?>"><?php esc_html_e('About URL Text:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'abouturltext' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'abouturltext' ) ); ?>" value="<?php echo esc_attr( $abouturltext ); ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'abouturl' ) ); ?>"><?php esc_html_e('About URL:','foodylite'); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'abouturl' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'abouturl' ) ); ?>" value="<?php echo esc_url( $abouturl ); ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function foodylite_about_register() {
    register_widget( 'foodylite_about' );
}
add_action( 'widgets_init', 'foodylite_about_register' );