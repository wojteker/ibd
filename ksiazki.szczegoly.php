<?php

// jesli nie podano parametru id, przekieruj do listy książek
if (empty($_GET['id'])) {
    header("Location: ksiazki.lista.php");
    exit();
}

$id = (int)$_GET['id'];

include 'header.php';

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$dane = $ksiazki->pobierz($id)
?>

    <h2><?= $dane['tytul'] ?></h2>

    <p>
        <a href="ksiazki.lista.php"><i class="fas fa-chevron-left"></i> Powrót</a>
    </p>

<!--    <p>szczegóły książki......</p>-->
    <p><b>Autor: </b><?= $dane['autor'] ?></p>
    <p><b>Kategoria: </b><?= $dane['kategoria'] ?></p>
    <p><b>Id: </b><?= $dane['id'] ?></p>
    <p><b>Opis: </b><?=$dane['opis']?></p>
    <p><b>Cena: </b><?=$dane['cena']?></p>
    <p><b>Liczba stron: </b><?=$dane['liczba_stron']?></p>
    <p><b>Nr isbn: </b><?=$dane['isbn']?></p>
    <p><b>Zdjęcie: </b><img src="zdjecia/<?=['zdjecie'] ?>" alt="<?=$dane['tytul']?>"></p>

<?php include 'footer.php'; ?>