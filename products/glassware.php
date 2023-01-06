<?php require_once '../header.php';

$products = [
    "Martini" => "https://imgs.search.brave.com/Pg4hQ-SLgM2BBoXErjxcr7S4AF7gpj1eysUIsFZoTCs/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5y/TVR5Zm13ZU5KbHUx/ZlE2TGk0RWhRSGFI/YSZwaWQ9QXBp",
    "Shot" => "https://imgs.search.brave.com/ygtd-I016EWCYenKZsiU8Nl5S7tius0bqEE938Ijk5g/rs:fit:444:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5C/U3VIQUFtdGpYWUhz/MGR1cmJMU3dnSGFI/NiZwaWQ9QXBp",
    "Brandy" => "https://imgs.search.brave.com/jOTHWyAe4un8cuAxtacY_ww0MUTqim1ne5MN7nP31JA/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5m/OGxfdXRUb1doLXZy/eEMycnhQaERnSGFI/YSZwaWQ9QXBp",
    "Tom Collins" => "https://imgs.search.brave.com/kUvx2N83NPl_L7Mmct9RRVPqS0ofZft7ZeTDiRjYzyY/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC52/dzk3SkJUWElXbUhS/TkxiXzlQLUZRSGFI/YSZwaWQ9QXBp"
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