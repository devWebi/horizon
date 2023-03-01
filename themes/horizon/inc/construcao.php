<?php 
// Cria post_type construcao
function create_construcao() 
{    
    $labels = array
	(
		'name'                => ( 'Historico de construção'),
		'singular_name'       => ( 'Historico de construção'),
		'menu_name'           => ( 'Historico de construção'),
		'parent_item_colon'   => ( 'Parent Historico de construção'),
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
    
    register_post_type('historico',
		array(
			'menu_icon'			 => 'dashicons-admin-tools',
			'labels'      		 => $labels,
			'public'      		 => true,
			'publicly_queryable' => false,
			'has_archive' 		 => true,
			'exclude_from_search'   => true,
			'supports'    		 => array( 'title', 'editor'),
			'menu_position'		 => 8,
		)
    );
}
add_action('init', 'create_construcao');
?>