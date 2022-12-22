<?php

include 'src/ChristmasTree.php';

if(isset($_POST['height']) && $_POST['height'] != null)
{
    $ChristmassTree = new ChristmasTree($_POST['height']);
    $ChristmassTree->printChristmasTree();
}

?>