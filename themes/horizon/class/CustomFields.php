<?php
class CustomFields {

	private $campos = [];
	private $post_type;

    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_custom_meta_boxes' ) );
        add_action( 'save_post', array( $this, 'save_custom_fields' ) );
    }
	
	public function fields($post_type, $arg){

		$this->campos = $arg;
		$this->post_type = $post_type;

	}

    public function add_custom_meta_boxes() {
        add_meta_box( 'custom_fields', 'Adicionar informação', [$this, 'custom_fields_callback'], $this->post_type, 'normal', 'default' );
    }

    public function custom_fields_callback( $post ) {
		
		$campos = count($this->campos);
		
		for ($i=0; $i < $campos; $i++) {
			
			$value = get_post_meta($post->ID, $this->campos[$i]["name"],true);

			if($this->campos[$i]["type"] == 'text'){
				echo '<b>'.$this->campos[$i]["titulo"].':</b><br/><input type="text" style="width: 100%; padding: 6px; margin: 8px 0 15px;" name="'.$this->campos[$i]["name"].'" placeholder="'.$this->campos[$i]["placeholder"].'" value="'.esc_attr($value).'" />';
			}elseif($this->campos[$i]["type"] == 'textarea'){
				echo '<b>'.$this->campos[$i]["titulo"].':</b><br/><textarea rows="2" style="width: 100%; padding: 6px; margin: 8px 0 15px;" name="'.$this->campos[$i]["name"].'" placeholder="'.$this->campos[$i]["placeholder"].'">'.esc_attr($value).'</textarea>';
			}elseif($this->campos[$i]["type"] == 'editor'){
				wp_editor( htmlspecialchars_decode($value), $this->campos[$i]["name"], $settings = array('textarea_name' => $this->campos[$i]["name"]));
			}else{
				echo '<div style="border-bottom: 1px solid #cccccc; padding-bottom: 6px; margin: 15px 0; font-weight: bold; font-size: 16px;">'.$this->campos[$i]["titulo"].'</div>';
			}
		}
    }

    public function save_custom_fields( $post_id ) {

		foreach ($this->campos as $metabox) {
			$var = $metabox["name"];
			
			if (isset($_POST[$var])) {
				if( get_post_meta( $post_id, $metabox["name"] ) == "" )
					add_post_meta($post_id, $metabox["name"], $_POST[$var], true );
				elseif($_POST[$var] != get_post_meta($post_id, sanitize_text_field($metabox["name"]), true))
					update_post_meta($post_id, $metabox["name"], $_POST[$var]);
				elseif($_POST[$var] == "")
					delete_post_meta($post_id, $metabox["name"], get_post_meta($post_id, $metabox["name"], true));
			}
		}
    }
}
?>