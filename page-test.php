<?php /* Template Name: page test */
get_header();

/* Code pour accéder aux pages d' enregistrement et de login placés dans un menu*/

?>
<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a>

<a href="<?php echo wp_registration_url(); ?>">Register</a>

<?php



/* j' ajoute un champ dans les deux formulaires */


function add_collection_field() {

    //Get and set any values already sent
    $user_collection = ( isset( $_POST['user_collection'] ) ) ? $_POST['user_collection'] : '';
    ?>

    <p>
        <label for="user_collection">Collection de photos<br />
            <input type="text" name="user_collection" id="user_collection" class="input" value="<?php echo esc_attr(stripslashes($user_collection)); ?>" size="25" />
        </label>
    </p>

    <?php
}

add_action('login_form','add_collection_field');
add_action('register_form', 'add_collection_field');


/* je sauve la valeur de ce champ dans les métas du user */


function insert_collection_field() {
    global $error;
    if(empty($_POST['user_collection']))
    {
    $error  = "Avez-vous une collection à ajouter? Si ce n' est pas le cas, ce n' est pas grave, vous pourrez le faire dans votre profil.";
    }
    else
	    {
			$user_collection = $_POST['user_collection'];

			$terms = get_terms( 'images_collections' );

			if ($terms)
				{
					foreach ($terms as $term)
						{
							$term_name = $term -> name;

							if ($user_collection == $term_name)
								{
									$current_user = wp_get_current_user();

									$current_user_id = $current_user -> ID;

									$term_id = $term -> term_id;

									$user_collections = get_user_meta( $current_user_id, '_wc_photography_collections', true );

									if (! in_array($term_id, $user_collections))
										{
											update_user_meta($current_user_id,  '_wc_photography_collections', $term_id);
										}
								}
						}
				}


	    }
}
add_action('login_head','insert_collection_field');
add_action( 'register_post', 'insert_collection_field', 10, 1 );


























get_footer();
?>