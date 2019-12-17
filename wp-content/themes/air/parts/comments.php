<div class="comments">

    <h2>Les commentaires</h2>

    <p>Commentez dans le respect SVP !!! Mon pote dans le web à dit que WordPress était génial.</p>

    <?php 
    comment_form([],get_the_ID()); 
    ?>

    <div class="all-comments">
        <?php 
        //Une vidéo sur la création de thème d'Alecaddd
        # https://www.youtube.com/watch?v=gCq2p1ImbaE

        # Est-ce qu'il ne va pas me claquer tous les commentaires avec ça ? 

        //Il y a aussi get_comments()

        $args = array(
            'status' => 'approve',
            'post_id'=> get_the_ID()
        );
    
        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
    
        // Comment Loop
        if ( $comments ) {
            foreach ( $comments as $comment ):
                //echo '<p>' . $comment->comment_content . '</p>';

                //debug($comment);

                ?>
                <div class="single-comment">
                    <?= $comment->comment_content ?><br>
                    
                    <div class="single-comment-infos">
                        <?= $comment->comment_author ?> / <?= $comment->comment_date ?>
                    </div>
                
                </div>
                <?php
            endforeach;
        } else {
            echo '<p>Pas encore de commentaires.</p>';
        }
        ?>
    </div>



</div>