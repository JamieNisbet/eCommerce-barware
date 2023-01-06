<?php require_once '../header.php';

$products = [
    "Boston" => "https://cdn.webshopapp.com/shops/64233/files/335119500/image.jpg",
    "Parisian" => "https://cdn.shopify.com/s/files/1/0169/1062/products/41A1030_2048x2048.jpg?v=1571264768"
];

?>

<!-- component -->

<div class="flex justify-between p-10">
    <?php foreach ($products as $title => $url) { ?>
        <div class="mx-auto max-w-md overflow-hidden rounded-lg bg-white shadow">
            <img src="<?= $url ?>" class="aspect-video w-full object-cover" alt="" />
            <div class="p-4">
                <h3 class="text-xl font-medium text-gray-900"><?= $title ?></h3>
            </div>
        </div>
    <?php } ?>
</div>