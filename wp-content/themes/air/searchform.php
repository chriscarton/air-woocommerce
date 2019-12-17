<form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label>Rechercher : </label>
        <input 
            type="search" 
            class="search-field" 
            placeholder="Votre recherche" 
            value="" 
            name="s" 
            title="Votre recherche" 
        />
        <input type="submit" class="search-submit" value="C'est parti" />
    </div>
</form>