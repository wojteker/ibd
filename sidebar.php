<?php
use Ibd\Ksiazki;
require_once 'src/Db.php';
require_once 'src/Ksiazki.php';
$ksiazki = new Ksiazki();
$bestsellers = $ksiazki->pobierzBestsellery();

?>

<div class="col-md-2">
	<h1>Bestsellery</h1>
	
	<ol>
        <?php foreach($bestsellers as $bestseller): ?>
        <li>
            <a href="ksiazki.szczegoly.php?id=<?=$bestseller['id']?>">
                <p><img src="zdjecia/<?=['zdjecie'] ?>" alt="<?=$bestseller['tytul']?>"></p>
                <p><?= $bestseller['tytul'] ?></p>
                <p><?= $bestseller['autor'] ?></p>
                </a>
        </li>
        <?php endforeach; ?>
	</ol>
</div>