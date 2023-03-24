<?php 
// Cria post_type servico
function create_servicos() 
{    
    $labels = array
	(
		'name'                => ( 'Serviços'),
		'singular_name'       => ( 'Serviço'),
		'menu_name'           => ( 'Serviços'),
		'parent_item_colon'   => ( 'Parent Serviços'),
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
    
    register_post_type('servicos',
		array(
			'menu_icon'			 => 'dashicons-star-filled',
			'labels'      		 => $labels,
			'public'      		 => true,
			'publicly_queryable' => false,
			'has_archive' 		 => true,
			'exclude_from_search'   => true,
			'supports'    		 => array( 'title', 'editor'),
			'menu_position'		 => 7,
		)
    );
}
add_action('init', 'create_servicos');

(new CustomFields())->fields('servicos',
		[
			0 => ["type" => "linha", "titulo" => "Card 01"],
			
			1 => array("type" => "text", "name" => "servico-card1", "placeholder" => "", "value" => "", "titulo" => "Titulo"),
			2 => array("type" => "textarea", "name" => "servico-previa-card1", "placeholder" => "", "value" => "", "titulo" => "Prévia de chamada"),
			3 => array("type" => "text", "name" => "servico-link-card1", "placeholder" => "Ex: https://google.com.br", "value" => "", "titulo" => "Adicionar URL do link"),
			
			4 => ["type" => "linha", "titulo" => "Card 02"],
			
			5 => array("type" => "text", "name" => "servico-card2", "placeholder" => "", "value" => "", "titulo" => "Titulo"),
			6 => array("type" => "textarea", "name" => "servico-previa-card2", "placeholder" => "", "value" => "", "titulo" => "Prévia de chamada"),
			7 => array("type" => "text", "name" => "servico-link-card2", "placeholder" => "Ex: https://google.com.br", "value" => "", "titulo" => "Adicionar URL do link")
		]
	);
?>