<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
 -->

<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Game.php';


$products =[

    new Game('Fresbee', 6, new Category('Dog'), 'yellow', 'plastic'),
    new Food('Good Treat', 60, new Category('Dog'), '15/12/2022', 20),
    new Food('Meow protein Treat', 80, new Category('Cat'), '30/12/2025', 10)
];

?>


<!doctype html>
<html lang="en">

<head>
    <title>php-oop-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) :?>
            <div class="col-4">
                <p>Product name: <?php echo $product->getName() ?></p>
                <p>Price: <?php echo $product->price ?> €</p>
                <p>Specific for: <?php echo $product->getCategory()->type ?></p>
                <!-- proprietà base -->


                <?php if ($product->weight && $product->expiryDate) {
                    ?><p>Weight: <?php echo $product->weight?> kg</p>
                <p>Expiry date: <?php echo $product->expiryDate?></p>
                <?php } ?>
                <!-- proprietà food -->

                <?php if ($product->color && $product->material) {
                    ?><p>Color: <?php echo $product->color?> kg</p>
                <p>Material: <?php echo $product->material?></p>
                <?php } ?>
                <!-- proprietà game -->

            </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>