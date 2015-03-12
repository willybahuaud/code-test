# code-test
divers test de code


/*******************/
/***11/03/2015***/
/*******************/


je cherche à récupérer les métas d' un utilisateur sur un thème avec woocommerce et l' add-on photography. Ce dernier permet de construire des collections de photos  via l' admin. Dans le profil de l' utilisateur, je peux lui donner l' accès à une ou plusieurs collections.

Son atout: il permet le bulk upload.



Le gros manque de ce plugin: l' ajout des accès doit se faire à la main, par l' administrateur du site. Cela fonctionne pour quelques utilisateurs  par jours, ce qui est mon cas, mais un photographe de mariage a, sur wp academy, posé la question qui tue: "et qu' est ce que je fais, moi, photographe de mariage avec cet add-on, si je dois ajouter plusieurs centaines de personnes par semaine?"



La réponse à ce problème est donc de créer une page de login dédiée dans laqellle, outre les informations classique, l' utilisateur entrera également le nom de la collection.


Mais avant, j' avais besoin de savoir comment étaient stockées ces informations, pour pouvoir les y placer dès l' inscriptions. 

Où j' en suis: j' ai trouvé les informations dans le tableau wc_photography_collections des user-métas. Plus exactement ce sont des identifiants.
Etape suivante: trouver où sont les valeurs liées à ces identifiants.


Une fois cela fait, je pourrai les introduire via un script dans ce tableau, script géré par la page de login.


