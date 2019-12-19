# WP-CLI

Install WP-CLI and use the wp i18n make-pot command according to the documentation.

Install : 

    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

Check : 

    php wp-cli.phar --info

Installation globale pour juste utiliser **wp** instead php wp-cli.phar

    sudo chmod +x wp-cli.phar
    sudo mv wp-cli.phar /usr/local/bin/wp

Retester l'installation globale : 

    wp --info

Mettre à jour : 

    wp cli update