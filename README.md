# Hello Wordpress 

## Utilisation webpack / sass 

## Configuration WordPress (Permalinks)

Settings -> Permalinks 
Change to Post Name (SEO Friendly)

Il se peut que le fichier *.htaccess* ne soit pas accessible. Dans ce cas il faut copier / coller manuellement les instructions données par l'administration dans un fichier *.htaccess à la racine. 

Ou bien **on ne s'emmerde pas** et on fait un chmod 0777 -R sur le dossier de travail 

### Configuration Apache 

Toujours pour que les permalinks fonctionnent et qu'on puisse accéder à ceci sans tomber sur une 404 : 

    http://localhost/air-woocommerce/bonjour-tout-le-monde/

Éditer le fichier de config : 

    sudo subl /etc/apache2/apache2.conf

Chercher :

    <Directory var/www>

Et changer :

    AllOverwrite All

Enfin, redémarrer Apache : 

    sudo services apache2 restart


## Création d'un theme 