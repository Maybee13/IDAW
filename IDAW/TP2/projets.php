<?php
    require_once('template_header.php');
?>
    <div class="title">
        <h1>MAYA DIDON</h1>
    </div>
    <div class="main-flex-container">
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('projets');
        ?>
        <section>
            <div class="container subtitle">
                <h2>Stage - Air Liquide (Juin - Août 2020)</h2>
            </div>
            <p>Usine de liquéfaction d'hydrogène Air Liquide (Waziers, France)</p>
            <ul>
                <li>Création d'un système de recherche de documents standards pour les canalisations</li>
                <li>Amélioration d'un document d'estimation de budget d'un projet canalisation</li>
            </ul>
        </section>
        <section>
            <div class="container subtitle">
                <h2>Projet #JeSuisIngénieurE (2019-2020)</h2>
            </div>
            <p>Responsable de la Communication</p>
            <ul>
                <li>Vise à donner de la visibilité aux femmes dans les métiers d'ingénieur</li>
                <li>Présentations des filières de l'ingénierie auprès de lycéens et collégiens</li>
            </ul>
        </section>
    </div>
<?php
    require_once('template_footer.php');
?>