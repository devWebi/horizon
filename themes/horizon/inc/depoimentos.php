<?php
// Cria post_type
function create_depoimentos() 
{    
    $labels = array
	(
		'name'                => ( 'Depoimentos'),
		'singular_name'       => ( 'Depoimento'),
		'menu_name'           => ( 'Depoimentos'),
		'parent_item_colon'   => ( 'Parent Depoimentos'),
		'all_items'           => ( 'Todos'),
		'view_item'           => ( 'Visualizar'),
		'add_new_item'        => ( 'Adicionar Novo'),
		'add_new'             => ( 'Adicionar'),
		'edit_item'           => ( 'Editar'),
		'update_item'         => ( 'Atualizar'),
		'search_items'        => ( 'Pesquisar'),
		'not_found'           => ( 'Não encontrado'),
		'not_found_in_trash'  => ( 'Nenhum encontrado na lixeira')
    );
    
    register_post_type('depoimentos',
		array(
			'menu_icon'			 => 'dashicons-edit-large',
			'labels'      		 => $labels,
			'public'      		 => true,
			'publicly_queryable' => false,
			'has_archive' 		 => true,
			'supports'    		 => array( 'title', 'thumbnail'),
			'menu_position'		 => 10,
		)
    );
}

add_action('init', 'create_depoimentos');

(new CustomFields())->fields('depoimentos',
		[
			0 => array("type" => "text", "name" => "cargo-depoimentos", "placeholder" => "Ex: Empresario(a), Gerente", "value" => "", "titulo" => "Cargo"),
			1 => array("type" => "textarea", "name" => "previa-depoimentos", "placeholder" => "", "value" => "", "titulo" => "Depoimento"),
		]
	);
?>