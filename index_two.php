<?php

  $partite = [
      [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantu',
        'punti_squadra_casa' => 90,
        'punti_squadra_ospite' => 75,
      ],
      [
        'squadra_casa' => 'Sidigas Avellino',
        'squadra_ospite' => 'Umana Venezia',
        'punti_squadra_casa' => 87,
        'punti_squadra_ospite' => 62,
      ],
      [
        'squadra_casa' => 'Banco di Sardegna Sassari',
        'squadra_ospite' => 'Segafredo Virtus Bologna',
        'punti_squadra_casa' => 104,
        'punti_squadra_ospite' => 90,
      ],
  ];


?>

<ul>
  <?php foreach ($partite as $partita) { ?>
    <li><?php echo $partita[squadra_casa] ?> - <?php echo $partita[squadra_ospite]; ?> / <?php echo $partita[punti_squadra_casa]; ?> - <?php echo $partita[punti_squadra_ospite]; ?> </li>
  <?php }  ?>
</ul>
