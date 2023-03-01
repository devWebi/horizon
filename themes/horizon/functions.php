<?php
require_once('inc/customizer.php');
// classe de metados para consulta de dados
require_once('class/Classe.php');
// classe de metados para construcao de fields
require_once('class/CustomFields.php');

$site = new Classe();

require_once('inc/banners.php');
require_once('inc/construcao.php');
require_once('inc/servicos.php');
require_once('inc/depoimentos.php');
require_once('inc/modelos.php');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// URLs para direcionamento de elementos e links internos do site, com o objetivo de diminuir as requisições no banco.
function wp_dir($value){
	$dir = array(
		'https://webihost.com.br/horizon',
		'https://webihost.com.br/horizon/wp-content/themes/horizon'
	);

	if ( stripos( $_SERVER['HTTP_HOST'], '.test' ) > 0 ) {
		$dir = array(
			'http://horizon.test',
			'http://horizon.test/wp-content/themes/horizon'
		);
	}

	return $dir[$value];
}

// oculta o administrador do wp-admin da URL e redireciona
function disableAuthorUrl(){
    if (is_author()) {
       wp_redirect(home_url());
       exit();
    }
}
add_action('template_redirect', 'disableAuthorUrl');

// Remove a versão do WordPress do cabeçalho
remove_action('wp_head', 'wp_generator');

// Remove atualizacao dos plugins
//add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

// Substitui o copy right do wordpress para outro
function wpmidia_change_footer_admin () {
    echo "Desenvolvido por <a href='https://webi.com.br' target='_blank'>Webi</a>";
} 
add_filter('admin_footer_text', 'wpmidia_change_footer_admin');

// Habilitar Thumbnail
add_theme_support("post-thumbnails");
// Define o tamanho da thumb para o tamanho original
add_image_size( 'original', 0, 0, false);

// remove a aba options do panel
function wpmidia_remove_screen_options(){
    return false;
}
add_filter('screen_options_show_screen', 'wpmidia_remove_screen_options');

// Remove os menus desejados
function removeMenu() {
	global $menu, $submenu;

	//unset($menu[65]); // Plugins
	unset($submenu['index.php'][10]); // Painel -> Atualização
}
add_action('admin_head', 'removeMenu');

// Remove opcoes de menus desnecessarias
function remove_menus(){
	//remove_menu_page( 'index.php' ); //Dashboard 
	remove_menu_page( 'edit.php' ); //Posts - publicações
	//remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
	//remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
	//remove_menu_page( 'edit.php?post_type=page' ); //Pages - páginas
	remove_menu_page( 'edit-comments.php' ); //Comments - comentários
	//remove_menu_page( 'themes.php' ); //Appearance - aparência (recomendo!)
	remove_menu_page( 'plugins.php' ); //Plugins (recomendo!)
	//remove_menu_page( 'users.php' ); //Users - usuários 
	remove_menu_page( 'tools.php' ); //Tools - ferramentas (recomendo!)
	//remove_menu_page( 'options-general.php' ); //Settings - configurações
	//remove_menu_page('edit.php?post_type=acf');
}

add_action( 'admin_init', 'remove_menus');
add_filter('acf/settings/show_admin', '__return_false');


// Consulta dos modulos

$banners = $site->modulo(['post_type' => 'banners', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC']);

$historico = $site->modulo(['post_type' => 'historico', 'post_status' => 'publish', 'numberposts' => 1, 'orderby' => 'date', 'order' => 'DESC']);

$servicos = $site->modulo(['post_type' => 'servicos', 'post_status' => 'publish', 'numberposts' => 1, 'orderby' => 'date', 'order' => 'DESC']);

$depoimentos = $site->modulo(['post_type' => 'depoimentos', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC']);

$modelos = $site->modulo(['post_type' => 'modelos', 'post_status' => 'publish', 'numberposts' => 3, 'orderby' => 'date', 'order' => 'DESC']);

$modelos_single = $site->modulo(['post_type' => 'modelos', 'post_status' => 'publish', 'numberposts' => 1, 'orderby' => 'date', 'order' => 'DESC']);


function my_attachments( $attachments )
{
  $fields = [
    array(
      'name'      => 'title',
      'type'      => 'text',
      'label'     => __( 'Titulo', 'attachments' ),
      'default'   => 'title',
    ),
	array(
		'name'      => 'caption',
		'type'      => 'textarea',
		'label'     => __( 'Previa', 'attachments' ),
		'default'   => 'caption',
	  ),
  ];

  $args = array(
    'label'         => 'Adicionar informações',
    'post_type'     => array( 'post', 'historico' ),
    'position'      => 'normal',
    'priority'      => 'high',
    'filetype'      => null,
    'note'          => null,
    'append'        => true,
    'button_text'   => __( 'Adicionar', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'router'        => 'browse',
	'post_parent'   => false,
    'fields'        => $fields,
  );

  $attachments->register( 'my_attachments', $args ); // unique instance name
}

function modelos_galeria( $attachments )
{
  $fields = [
    array(
      'name'      => 'title',
      'type'      => 'text',
      'label'     => __( 'Titulo', 'attachments' ),
      'default'   => 'title',
    )
  ];

  $args = array(
    'label'         => 'Adicionar fotos',
    'post_type'     => array( 'post', 'modelos' ),
    'position'      => 'normal',
    'priority'      => 'low',
    'filetype'      => null,
    'note'          => null,
    'append'        => true,
    'button_text'   => __( 'Adicionar', 'attachments' ),
    'modal_text'    => __( 'Attach', 'attachments' ),
    'router'        => 'browse',
	'post_parent'   => false,
    'fields'        => $fields,
  );

  $attachments->register( 'modelos_galeria', $args ); // unique instance name
}

add_action( 'attachments_register', 'modelos_galeria' );