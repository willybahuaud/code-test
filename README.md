# code-test
divers test de code


/*******************/
/***11/03/2015***/
/*******************/


je cherche à récupérer les métas d' un utilisateur sur un thème avec woocommerce et l' add-on photography. Ce dernier permet de construire des collections de photos et via l' admin, profil de l' utilisateur, je peux lui donner l' accès à une ou plusieurs collections.

Ce que je cherche à faire: ajouter automatiquement, lors de l' inscription au site, via un champ spécialisé du formulaire, l' accès à une collection donnée. Pour cela je dois ajouter à la méta-key "_wc_photography_collections" la valeur correspondant à la collection.


Problème: pour chercher la méta-key, j' ai récupéré le tableau des métas. J' avais rempli le champ dans le profil et ai ce résultat:

  ["_wc_photography_collections"]=>
  array(1) {
    [0]=>
    string(26) "a:2:{i:0;i:457;i:1;i:458;}"
  }
  
  ce qui montre qu' il y a bien une valeur stockée.
  
  Mais lorsque j' explore le $user_collection, j' obtiens ce tableau:
  
  rray(1) {
  [0]=>
  array(2) {
    [0]=>
    int(457)
    [1]=>
    int(458)
  }
}

qui ne contient pas de valeurs.

Ensuite, si j' ajoute une valeur à cette clef, j' écrase la valeur existante. 

update_user_meta( $user_id, $meta_key, $meta_value, $prev_value );

Je suppose que c' est parce que je n' ai pas rempli le paramètre  $prev_value, mais le codex est succint à ce sujet.