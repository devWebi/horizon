<?php
class Classe{
    private $posts;

    public function __construct() {
		//$arg = ['p' => "", "post__in" => [28], 'orderby' => 'date', 'order' => 'ASC'];
    }

    public function modulo($arg = []){

		$this->posts = get_posts($arg);

		$linha = [];
        if ( ! empty( $this->posts ) ) {

			foreach($this->posts as $rows)
			{
				$image = $this->img($rows->ID);
				array_push($linha, (object)['dados' => $rows, 'img' => $image]);
			}
        }
		return $linha;
    }
	
	//function para localiza e renderizar a imagem
	public function img($id)
	{
		$imgID = get_post_thumbnail_id($id);
		$src = wp_get_attachment_image_src($imgID, $size='full');
		$img = explode('uploads/', $src[0]);
		
		return $img[1];
	}
}
?>