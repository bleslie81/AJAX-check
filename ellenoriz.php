<?php
    foreach($_GET as $key=>$value){
        $$key=$value;
    }

    function ellenoriz($nev){
        if($nev==''){
            return '';
        }
        if(strlen($nev)<=3){
            return "<font style='color:red'>A név túl rövid!</font>";
        }

        switch($nev){
            case 'pali':
            case 'julcsi':
                return "<font style='color:red'>A név foglalt!</font>";
        }
        return "<font style='color:green'>A név megfelelő!</font>";
    }

    echo ellenoriz(trim($nev))
?>