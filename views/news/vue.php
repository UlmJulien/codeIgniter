<h1>Bonjour</h1>

<p>
    Ceci est un paragraphe 
</p>

<p>
    Ton pseudo est <?php echo $pseudo; ?>
</p>


<p>
    Ton email est <?php echo $email; ?>
</p>

<p>
    <?php 
        if ($en_ligne) :
            echo "Vous etes en ligne";
        else :
            echo "Vous n'est pas en ligne";
    endif;
    ?>
</p>