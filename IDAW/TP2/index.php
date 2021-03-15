<?php
    require_once('template_header.php');
    require_once('template_menu.php');

    $currentPageId='accueil';
    if(isset($_GET['page'])){
        $currentPageId=$_GET['page'];
    }

    $lang='fr';
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
    }

?>
    <div class="title">
        <h1>MAYA DIDON</h1>
    </div>

<?php
    renderMenuToHTML($currentPageId);
?>

    <section class="main-flex-container">
        <div id="content-wrap">
        <?php
            $pageToInclude=$lang."/".$currentPageId.".php";
            if(is_readable($pageToInclude)){
                require_once($pageToInclude);
            }
            else{
                require_once("error.php");
            }
        ?>
        </div>
    </section>
<?php
    require_once('template_footer.php');
?>