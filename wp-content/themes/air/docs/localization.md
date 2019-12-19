# Localization 

    https://developer.wordpress.org/apis/handbook/internationalization/localization/

PO : Portable Object files
MO : Machine Object files

Poedit

... 

# __();
If there is no translation, or the text domain isn’t loaded, the original text is returned.

WordPress uses the gettext libraries and tools for i18n. Gettext is an old and respectable piece of software, widely used in the open-source world.

## Comment ça marche ?

- Developers wrap translatable strings in special gettext functions

- Special tools parse the source code files and extract the translatable strings into POT (Portable Objects Template) files

- In the WordPress world, POT files are often fed to GlotPress, which is a collaboration tool for translators

- Translators translate the strings and the result is a PO file (POT file, but with translations inside)

- PO files are compiled to binary MO files, which give faster access to the strings at run-time


# OUAIS OUAIS

Voici en gros comment générer un fichier .po 

https://wpchannel.com/wordpress/tutoriels-wordpress/traduction-po-mo-wordpress-i18n