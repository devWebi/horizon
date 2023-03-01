<?php 
// Cria post_type banners
function create_banners() 
{    
    $labels = array
	(
		'name'                => ( 'Banners'),
		'singular_name'       => ( 'Banner'),
		'menu_name'           => ( 'Banners'),
		'parent_item_colon'   => ( 'Parent Banners'),
		'all_items'           => ( 'Todos os Banners'),
		'view_item'           => ( 'Visualizar Banner'),
		'add_new_item'        => ( 'Adicionar Novo Banner'),
		'add_new'             => ( 'Adicionar Banner'),
		'edit_item'           => ( 'Editar Banner'),
		'update_item'         => ( 'Atualizar Banner'),
		'search_items'        => ( 'Pesquisar Banner'),
		'not_found'           => ( 'Banner não encontrado'),
		'not_found_in_trash'  => ( 'Nenhum Banner encontrado na lixeira')
    );
    
    register_post_type('banners',
		array(
			'menu_icon'			 => 'dashicons-format-image',
			'labels'      		 => $labels,
			'public'      		 => true,
			'publicly_queryable' => false,
			'has_archive' 		 => true,
			'exclude_from_search'   => true,
			'supports'    		 => array( 'title', 'editor', 'thumbnail'),
			'menu_position'		 => 6,
		)
    );
}
add_action('init', 'create_banners');

(new CustomFields())->fields('banners',
		[
			0 => array("type" => "text", "name" => "link-conhecer-barco", "placeholder" => "Ex: https://google.com", "value" => "", "titulo" => "URL - Conheça o barco"),
		]
	);
?>