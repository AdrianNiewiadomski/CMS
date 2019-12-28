<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mój CMS</title>
    </head>
    <body>
        <?php
            foreach ($elementy as $element) {
                echo $element->get_nr().":".$element->get_typ_elementu()."<br>";
            }
        ?>

        <iframe src="../index.html" width="" height=""></iframe>

    </body>
</html>
