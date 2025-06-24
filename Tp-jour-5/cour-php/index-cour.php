
<?php
    //lancer une session
    session_start();

    //mettre une valeur dans le 'tableau' session
    // clef [test] => valeur 'ma valeur de test'
    $_SESSION['test']='ma valeur de test';

    //permet de completement le cookie.
    //session_destroy();

    //mettre à 0 les valeur
    //$_SESSION = [];

