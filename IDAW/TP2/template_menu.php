<?php
    function renderMenuToHTML($currentPageId){
        $mymenu=array(
            'index'=>array('Accueil'),
            'cv'=>array('CV'),
            'projets'=>array('Projets'),
            'infos-techniques'=>array('Infos Tech')
        );
        echo 
"<nav class='menu'>
    <div class='container'>
        <ul>";
            foreach($mymenu as $pageId => $pageParameters){
                echo "<li><a ";
                if($pageId == $currentPageId){
                    echo "id=\"pageactu\" ";
                }
                echo "href='$pageId.php'><span>$pageParameters[0]</span></a></li>\n";
            }
        echo"</ul></div></nav>";
    }
?>