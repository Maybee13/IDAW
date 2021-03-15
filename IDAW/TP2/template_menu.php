<?php
    function getLanguageIndex(){
        if($lang='en'){
            return(1);
        }
        if($lang='fr'){
            return(0);
        }
        else{
            return(0);
        }
    }

    function renderMenuToHTML($currentPageId){
        $mymenu=array(
            'accueil'=>array('Accueil', 'Home'),
            'cv'=>array('CV','CV'),
            'projets'=>array('Projets','Projects'),
            'associatif'=>array('Extra-Scolaire','Extra Curricular'),
            'contact'=>array('Contact','Contact')
        );

        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
        }
        else{
            $lang='fr';
        }

        $languageIndex=getLanguageIndex();

        echo 
"<nav class='menu'>
    <div class='container'>
        <ul>";
            foreach($mymenu as $pageId => $pageParameters){
                echo "<li><a ";
                if($pageId == $currentPageId){
                    echo "id=\"pageactu\" ";
                }
                echo "href='http://localhost/IDAW/TP2/index.php?page=$pageId&lang=$lang'><span>$pageParameters[$languageIndex]</span></a></li>\n";
            }
        echo"</ul></div></nav>";
    }
?>