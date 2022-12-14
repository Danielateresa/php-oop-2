<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
 -->

<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';



$products =[

    $fresbee = new Game('Fresbee', 6, 'fresbee.png', new Category('Dog'), 'plastic'),
    $mouse = new Game('Mouse', 4, 'mouse.jpg', new Category('Cat'), 'fur and plastic'),
    $goodTreat = new Food('Good Treat', 60, 'dog_treat.jpg', new Category('Dog'), '15/12/2023', 20),
    $meow = new Food('Meow protein Treat', 80, 'cat_treat.jpg', new Category('Cat'), '30/12/2025', 10),
    $kennell = new Kennel('Pillow', 70, 'pillow.jpg', new Category('Dog'), '50 x 90', 'goose feather')
];
$fresbee->setColor('yellow');
$kennell->setColor('beige');
$mouse->setColor('grey');

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
<style>
img {
    max-height: 150px;
    aspect-ratio: 1/1;
    object-fit: contain;
}

tag {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: green;
    color: white;
    padding: 0 5px;
}

.row {
    height: 480px;
}
</style>

<body>
    <h1 class="py-3 ps-2">Pet shop</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) :?>
            <div class="col-4 mb-4 h-100">
                <div class="card p-2 position-relatve h-100">
                    <img class="w-100 my-4" src="./assets/img/<?php echo $product->getFoto() ?>"
                        alt="<?php echo $product->getName() ?>">

                    <div class="product_details">
                        <p>Product name: <?php echo $product->getName() ?></p>
                        <p>Price: <?php echo $product->getPrice() ?> ???</p>
                        <p>Specific for: <?php echo $product->getCategory()->type ?></p>
                        <!-- propriet?? base -->

                        <?php if ($product->weight) {
                            ?><p>Weight: <?php echo $product->getWeight()?> kg</p><?php } ?>
                        <?php if ($product->expiryDate) {
                            ?><p>Expiry date: <?php echo $product->getExpiryDate()?></p><?php } ?>
                        <?php if ($product->fastShipment) {
                            ?><tag class="available"><?php echo $product->fastShipment()?></tag><?php } ?>
                        <?php if ($product->color) {
                            ?><p>Color: <?php echo $product->getColor()?></p><?php } ?>
                        <?php if ($product->material) {
                            ?><p>Material: <?php echo $product->getMaterial()?></p><?php } ?>
                        <?php if ($product->size) {
                            ?><p>Size: <?php echo $product->getSize()?> cm</p><?php } ?>
                        <?php if ($product->filling) {
                            ?><p>Filling: <?php echo $product->getFilling()?></p><?php } ?>
                        <!-- classi specifiche condizionali-->
                    </div>
                </div>
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