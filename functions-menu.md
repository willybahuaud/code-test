code basé sur l' article suivant: http://wabeo.fr/hook-nav-menus/

l' objectif est de créer un menu qui listera les années de publications des différents articles d' un site en supposant que pour l' année courante il y a au moins une publication. La recherche s' arrête sur la première année sans publication.


Pour cela j' utilise une boucle "do....while()" puisque la condition vient en fin de boucle pour la relancer ou non.


Le système se refuse à afficher la page, me signifiant qu' il n' arrive pas à trouver le serveur, même si je penche plus pour un "timeout". Cela survient lorsque la boucle n' est pas mise en commentaire, mais si je l' y place, le script fonctionne en plaçant l' année 2015, comme prévu comme élément du menu.



En fait le code créera deux menus: un basé sur les années de publications et un sur les mois de publication, ce dernier étant basé sur le premier. A la limite, le menu contenant les mois peut être créé "à la main", via l' admin, mais il faut au moins créer dynamiquement un menu des années, puisque, contrairement aux mois, il n' y en n' a pas un nombre fini.