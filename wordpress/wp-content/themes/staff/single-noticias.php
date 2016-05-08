<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 <section>
            <div class="row">

                <div class="col s12 m6">
                  <div class="card ">
                    <div class="card-image">
                    <?php
			 			$imagen = get_post_meta( $post->ID, 'imagen', true );

			            $imagen_servicios_crop = wp_get_attachment_image_src($imagen['ID'],'img_home_servicios');
			          	 ?>
                      <img src="<?php echo $imagen['guid'] ?>" height="200" width="100">

                    </div>
                    <div class="card-content">
                      <h5><?php the_title() ?></h5>
                    </div>
                      <p><?php the_content(); ?></p>

                  </div>
                </div>




            </div>

        </section>
<?php get_footer(); ?>
