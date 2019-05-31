<?php
//この関数はXSS対応用です。
function h($s){
    return htmlspecialchars($s,ENT_QUOTES);
}

?>