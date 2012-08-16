<h1>
	Test
</h1>

<p>
    <a href="<?php echo site_url(); ?>">accueil</a>
    <br />

    <a href="<?php echo site_url('test'); ?>">accueil</a> du test
    <br />

    <a href="<?php echo site_url('test/secret/2452/codeIgniter'); ?>">page secrète1</a>
    <br />

    <a href="<?php echo site_url(array('test', 'secret', '2452', 'codeIgniter')); ?>">page secrète2</a>
    <br/>

    <a href="<?php echo site_url('test', 'secret', '2452', 'codeIgniter'); ?>">page secrète3</a>
    <br />
    
    <?php
        url('Page de connexion', 'user', 'connexion');
    ?>
</p>
