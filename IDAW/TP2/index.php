<?php
    require_once('template_header.php');
?>
    <div class="title">
        <h1>MAYA DIDON</h1>
    </div>
    <div class="main-flex-container">
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('index');
        ?>
        <div class="container">
            <h3>Bienvenue sur mon Site Professionnel !</h3>
            <h5>Profil :</h5>
            <p>
            Etudiante M1 en ingénierie à IMT Lille-Douai (ex Mines de Douai) à la recherche d'un stage assistant ingénieur de 16 à 20 semaines en programmation ou développement web.
            </p>
        </div>
    </div>
<?php
    require_once('template_footer.php');
?>