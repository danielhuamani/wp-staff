<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<body <?php body_class( 'css-home' ); ?>>
    <div class="row" id="mostrarPublicacion">
    <?php
		$arg = array(
			'showposts' => 3,
			'post_type' => 'noticias'
		);
		$noticia = new WP_Query($arg);
		while($noticia->have_posts()) : $noticia->the_post();
	?>
      <div class="col s12 m4" id="publicacion_detalle">
        <div class="card ">
          <div class="card-image">
          	<?php
 			$imagen = get_post_meta( $post->ID, 'imagen', true );

            $imagen_servicios_crop = wp_get_attachment_image_src($imagen['ID'],'img_home_servicios');
          	 ?>
            <img src="<?php echo $imagen['guid'] ?>" height="200" width="100">
          </div>
          <div class="card-content">

            <h5 class=""><?php the_title() ?></h5>

            <p><?php the_content() ?></p>
          </div>
          <a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>">Ver mas</a>
        </div>
      </div>
      <?php endwhile; ?>




    </div>



<?php get_footer(); ?>
