<?php /* Template Name: page test */
get_header();



$current_user = wp_get_current_user();

$current_user_id = $current_user -> ID;


$current_user_meta = get_user_meta($current_user_id);


?>
<div class="vardump">
<h1>$current_user_meta</h1>
<pre>
<?php var_dump($current_user_meta);  ?>
</pre>
</div>
<?php



 $user_collections = get_user_meta( $current_user_id, '_wc_photography_collections', false );





?>
<div class="vardump">
<h1>$user_collections</h1>
<pre>
<?php var_dump($user_collections);  ?>
</pre>
</div>
<?php












































get_footer();
?>