<?php

class Horizon_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'bootstrap' ) );	
	}

	public function bootstrap( WP_Customize_Manager $wp_customize ) {
		$this->setup_social_media_fields( $wp_customize );
	}

	public function setup_social_media_fields( WP_Customize_Manager $wp_customize ) {
		
		$wp_customize->remove_panel('themes');
		$wp_customize->remove_section( 'title_tagline', [] );
		$wp_customize->remove_section( 'static_front_page', [] );
		$wp_customize->remove_section( 'custom_css', [] );
		
		$wp_customize->add_section( 'configura_dados', array(
			'title'			=>	'Configuração de contatos',
			'description'	=>	'Defina os dados de contato',
			'priority'		=>	150
		) );

		$wp_customize->add_setting( 'previa_logo', array(
			'default'	=>	null
		) );
		
		$wp_customize->add_setting( 'facebook', array(
			'default'	=>	null
		) );

		$wp_customize->add_setting( 'instagram', array(
			'default'	=>	null
		) );
		
		$wp_customize->add_setting( 'linkedin', array(
			'default'	=>	null
		) );

		$wp_customize->add_setting( 'youtube', array(
			'default'	=>	null
		) );

		$wp_customize->add_setting( 'telephone', array(
			'default'	=>	null
		) );

		$wp_customize->add_setting( 'whatsapp', array(
			'default'	=>	null
		) );

		$wp_customize->add_setting( 'whatsapp-message', array(
			'default'	=>	null
		) );
		
		$wp_customize->add_setting( 'email', array(
			'default'	=>	null
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'previa_logo', array(
			'label'			=>	'Previa',
			'description'	=>	'Texto curto para chamada da marca',
			'section'		=>	'configura_dados',
			'settings'		=>	'previa_logo',
			'type'			=>	'textarea'
		) ) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
			'label'			=>	'Facebook',
			'description'	=>	'URL do perfil no Facebook',
			'section'		=>	'configura_dados',
			'settings'		=>	'facebook',
			'type'			=>	'url'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
			'label'			=>	'Instagram',
			'description'	=>	'URL do perfil no Instagram',
			'section'		=>	'configura_dados',
			'settings'		=>	'instagram',
			'type'			=>	'url'
		) ) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
			'label'			=>	'LinkedIn',
			'description'	=>	'URL do perfil no LinkedIn',
			'section'		=>	'configura_dados',
			'settings'		=>	'linkedin',
			'type'			=>	'url'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
			'label'			=>	'YouTube',
			'description'	=>	'URL do canal no YouTube',
			'section'		=>	'configura_dados',
			'settings'		=>	'youtube',
			'type'			=>	'url'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'telephone', array(
			'label'			=>	'Telefone',
			'description'	=>	'<strong>Ex: (00) 00000.0000</strong>.',
			'section'		=>	'configura_dados',
			'settings'		=>	'telephone',
			'type'			=>	'text'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatsapp', array(
			'label'			=>	'Whatsapp',
			'description'	=>	'Digite <strong>apenas números com DDD</strong>.',
			'section'		=>	'configura_dados',
			'settings'		=>	'whatsapp',
			'type'			=>	'number'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatsapp-message', array(
			'label'			=>	'Mensagem do WhatsApp',
			'description'	=>	'A mensagem que o usuário irá enviar ao clicar no botão do WhatsApp.',
			'section'		=>	'configura_dados',
			'settings'		=>	'whatsapp-text',
			'type'			=>	'text'
		) ) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email', array(
			'label'			=>	'E-mail',
			'description'	=>	'Digite um e-mail',
			'section'		=>	'configura_dados',
			'settings'		=>	'email',
			'type'			=>	'text'
		) ) );
	}
}

new Horizon_Customizer();
