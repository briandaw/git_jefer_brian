<?php
//1//
$color = array('blanca','verda','vermella','blava','negra');
print_r("La memòria d'aquesta escena per a mi és com una fotografia,
 sempre congelat en aquell moment: la catifa $color[2], la gespa $color[1],
  la casa $color[0], el cel de plom.");
  echo nl2br(" \n ");
?>
<?php
//2//
    $color = array('blanc','vermell','verd');
    print_r($color);
    echo nl2br(" \n ");
    print_r(array_reverse($color));
    echo nl2br(" \n ");
?>
<?php
//3//
    $color2 = ['blanc','vermell','verd'];  
    $color2[] = 'negro';
    print_r($color2);
    echo nl2br(" \n ");
?>
