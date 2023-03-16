<?php 
// Cria post_type modelos
function create_modelos() 
{    
    $labels = array
	(
		'name'                => ( 'Modelos'),
		'singular_name'       => ( 'Modelo'),
		'menu_name'           => ( 'Modelos'),
		'parent_item_colon'   => ( 'Parent Modelos'),
		'all_items'           => ( 'Todos'),
		'view_item'           => ( 'Visualizar'),
		'add_new_item'        => ( 'Adicionar novos'),
		'add_new'             => ( 'Adicionar'),
		'edit_item'           => ( 'Editar'),
		'update_item'         => ( 'Atualizar'),
		'search_items'        => ( 'Pesquisar'),
		'not_found'           => ( 'Não encontrado'),
		'not_found_in_trash'  => ( 'Nenhum encontrado na lixeira')
    );
    
    register_post_type('modelos',
		array(
			'menu_icon'			 => 'dashicons-screenoptions',
			'labels'      		 => $labels,
			'public'      		 => true,
			'publicly_queryable' => true,
			'has_archive' 		 => true,
			'exclude_from_search'   => true,
			'supports'    		 => array( 'title', 'editor', 'thumbnail'),
			'rewrite'			=>	array(
				'slug'			=>	'modelos',
				'with_front'	=>	false
			),
			'menu_position'		 => 9,
		)
    );
}
add_action('init', 'create_modelos');

(new CustomFields())->fields('modelos',
		[
			0 => ["type" => "linha", "titulo" => "Especificações"],
			1 => array("type" => "editor", "name" => "modelo-especificacao"),
			2 => ["type" => "linha", "titulo" => "Equipamentos"],
			3 => array("type" => "editor", "name" => "modelo-equipamentos"),
		]
	);
?>