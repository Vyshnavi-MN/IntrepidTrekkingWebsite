<?php
function buttonElement($style,$text,$name)
{
$btn="
    <button name='$name'  class='$style' style='width:310px '>$text</button>
    ";
        echo $btn;
}