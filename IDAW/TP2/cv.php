<?php
    require_once('template_header.php');
?>
    <div class="title">
        <h1>MAYA DIDON</h1>
    </div>
    <div class="main-flex-container">
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('cv');
        ?>
        <section>
            <div class="container subtitle">
                <h2>Formation</h2>
            </div>
            <p>
                <h4>Etudiante en Ingénierie (depuis 2019)</h4>
                M1 en ingénierie à IMT Lille-Douai spécialité numérique - programmation
            </p>
            <p>
                <h4>Classes Préparatoires aux Grandes Ecoles (2017 - 2019)</h4>
                CPGE en Maths-Physique spécialité informatique au Lycée Fabert (Metz)
            </p>
        </section>
        <section>
            <div class="container subtitle">
                <h2>Compétences</h2>
            </div>
            <ul>
                <li>Python, SQL, Java, C, Pharo</li>
                <li>Notions de HTML et Linux</li>
                <li>Word, Excel, PowerPoint</li>
                <li>Maîtrise de Adobe Photoshop, Illustrator, Premiere Pro</li>
            </ul>
        </section>
<?php
    require_once('template_footer.php');
?>