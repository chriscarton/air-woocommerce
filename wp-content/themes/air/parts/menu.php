<nav id="Menu">
    <?php 
        //Bon il faut déclarer le menu dans l'admin pour pouvoir utiliser cette fonction correctement
        wp_nav_menu([
            'theme_location'=>'top-menu',
            'walker'=> new Custom_Walker_Nav_Menu(),
            'container'=>false,
            'items_wrap' => '%3$s'
        ]);
        /*
        container et item_wrap servent à supprimer dans ce cas les conteneurs superflus
        walker utilise une classe personnalisée pour parcourir les éléments... 
        cette classe se trouve dans un dossier "walkers" du thème
        */
    ?>
</nav>

<script>
    //alert('me');

    var items = document.querySelectorAll('.menu-item');
    
    //console.log(levels);

    items.forEach(function(item){
        //console.log(level);
        item.addEventListener('mouseover',function(e){
            //Ouais bon je sais pas trop...
        });
    });

</script>