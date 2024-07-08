<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Widget_Flip_Card extends Widget_Base {

    public function get_name() {
        return 'flip-card';
    }

    public function get_title() {
        return __( 'Flip Card', 'my-flip-card-plugin' );
    }

    public function get_icon() {
        return 'eicon-flip-box';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'my-flip-card-plugin' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'front_title',
            [
                'label' => __( 'Front Title', 'my-flip-card-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Front Title', 'my-flip-card-plugin' ),
            ]
        );

        $this->add_control(
            'front_content',
            [
                'label' => __( 'Front Content', 'my-flip-card-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Front Content', 'my-flip-card-plugin' ),
            ]
        );

        $this->add_control(
            'back_title',
            [
                'label' => __( 'Back Title', 'my-flip-card-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Back Title', 'my-flip-card-plugin' ),
            ]
        );

        $this->add_control(
            'back_content',
            [
                'label' => __( 'Back Content', 'my-flip-card-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Back Content', 'my-flip-card-plugin' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="card-container">
            <div class="card">
                <div class="card-front">
                    <h2><?php echo $settings['front_title']; ?></h2>
                    <p><?php echo $settings['front_content']; ?></p>
                    <button class="flip-button"><?php _e( 'More', 'my-flip-card-plugin' ); ?></button>
                </div>
                <div class="card-back">
                    <h2><?php echo $settings['back_title']; ?></h2>
                    <p><?php echo $settings['back_content']; ?></p>
                    <button class="flip-button"><?php _e( 'Back', 'my-flip-card-plugin' ); ?></button>
                </div>
            </div>
        </div>

        <?php
    }
}
