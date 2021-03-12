<?php
    require_once('template_header.php');
?>
<div class="title">
        <h1>MAYA DIDON</h1>
    </div>
    <div class="main-flex-container">
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('infos-techniques');
        ?>
        <div class="container">
            <h3>Informations Techniques !</h3>
            <p>
            Ceci est la page d'informations techniques
            </p>
        </div>
    </div>
<?php
    require_once('template_footer.php');
?>