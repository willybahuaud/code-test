# code-test
divers test de code


/*******************/
/***11/03/2015***/
/*******************/


je cherche à récupérer les métas d' un utilisateur sur un thème avec woocommerce et l' add-on photography. Ce dernier permet de construire des collections de photos  via l' admin. Dans le profil de l' utilisateur, je peux lui donner l' accès à une ou plusieurs collections.

Son atout: il permet le bulk upload.



Le gros manque de ce plugin: l' ajout des accès doit se faire à la main, par l' administrateur du site. Cela fonctionne pour quelques utilisateurs  par jours, ce qui est mon cas, mais un photographe de mariage a, sur wp academy, posé la question qui tue: "et qu' est ce que je fais, moi, photographe de mariage avec cet add-on, si je dois ajouter plusieurs centaines de personnes par semaine?"



La réponse à ce problème est donc de créer une page de login dédiée dans laquellle, outre les informations classique, l' utilisateur entrera également le nom de la collection.


Mais avant, j' avais besoin de savoir comment étaient stockées ces informations, pour pouvoir les y placer dès l' inscriptions. 

Où j' en suis: j' ai trouvé les informations dans le tableau wc_photography_collections des user-métas. Plus exactement ce sont des identifiants.
Etape suivante: trouver où sont les valeurs liées à ces identifiants.


Une fois cela fait, je pourrai les introduire via un script dans ce tableau, script géré par la page de login.







/*******************/
/***17/03/2015***/
/*******************/



La première partie est réglée: j' ai les métas du user et plus particulièrement celle liée à ce plugin qui fourni des identifiants de collections. ( _wc_photography_collections).

La taxonomie définissant les collections est 'images_collections'. Je peux donc accéder aux noms et identifiants via "get_terms".

Je modifie les formes d' inscriptions et de login via des hooks.

login_form et register_form pour ce qui concerne l' addition d' un champ

login_head et register_post pour la sauvegarde dans les métas

Le principe de la sauvegarde est simple: je récupères les différents termes de la taxo via get_terms(), je boucle dessus en comparant le mot du champ aux noms de chaque terme et si cela fait tilt, bingo! il me suffit d' updater les métas avec l' identifiant correspondant.


Problème du jour: je n' arrive pas à enregistrer les métais.

Raison probable: les hooks utilisés arrivent trop tôt, respectivement avant que l' utilisateur ne soit identifié, ou avant qu' il ne soit créé. Mais je ne vois pas qoi utiliser et comment.

