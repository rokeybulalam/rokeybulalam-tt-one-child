<?php
 
class Rokeybulalam_Elementor_Addon_Hello_World extends \Elementor\Widget_Base {

	public function get_name() {
		return 'rokeybulalam_hello_world';
	}

	public function get_title() {
		return esc_html__( 'Hello World', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls(){
	$this->start_controls_section(
		'content',
		[
			'label' => esc_html__( 'content', 'elementor-addon' ),
			'tab' => \Elementor\Controls_Manager::TEXT,
		]
	);

	$this->add_control(
		'title',
		[
			'label' => esc_html__( 'Title', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Hello world', 'elementor-addon' ),
		]
	);

	$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<p><?php echo $settings['title'];?></p>

		<?php
	}
}