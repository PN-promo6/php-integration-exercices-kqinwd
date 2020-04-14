<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exo03</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php
        $dirname = "img/";
        $images = glob($dirname . "*.jpg");

        foreach ($images as $image) {
            echo '<img src="' . $image . '" /><br />';
        }
        ?>
    </section>
</body>