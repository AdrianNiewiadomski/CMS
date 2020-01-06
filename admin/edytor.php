<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mój CMS</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
    				<th>Nr</th>
    				<th>Rodzic</th>
                    <th>Dzieci</th>
    				<th>Typ elementu</th>
    				<th>Atrybut 1</th>
                    <th>Atrybut 2</th>
                    <th>Atrybut 3</th>
                    <th>Atrybut 4</th>
    				<th>Zawartość</th>
                    <th>Opcje</th>
    			</tr>
            </thead>
			<tbody>

                <?php
                    foreach ($elementy as $element) {
                        echo "<tr>";
                        echo "<td>".$element->get_nr()."</td>";
                        echo "<td>".$element->get_rodzic()."</td>";
                        echo "<td>".$element->get_dzieci()."</td>";
                        echo "<td>".$element->get_typ_elementu()."</td>";
                        echo "<td>".$element->get_atrybut1()."</td>";
                        echo "<td>".$element->get_atrybut2()."</td>";
                        echo "<td>".$element->get_atrybut3()."</td>";
                        echo "<td>".$element->get_atrybut4()."</td>";
                        echo "<td>".$element->get_zawartosc()."</td>";
                        echo "<td>";
                        echo "<a href='formularzWidok.php?rodzic=".$element->get_nr()."' class='green'>+</a>";
                        echo "<a href='formularzWidok.php?id=".$element->get_nr()."' class='blue'>E</a>";
                        echo "<a href='index.php?id=".$element->get_nr()."' class='red'>X</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>

            </tbody>
        </table>

        <iframe src="../index.html" width="" height=""></iframe>

    </body>
</html>
