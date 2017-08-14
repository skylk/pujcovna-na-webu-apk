<!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
           <p>Pro nahrání nového ceníku do databáze, stiskni tlačítko "Importovat data".</p>
            <form method="post">
                <button type="submit" name="btn_import">Importovat data</button>
            </form>
            <?php

            $host = "localhost";
            $uname = "pujcovaninaradi";
            $pass = "jenikov";
            $database = "stroje"; //Change Your Database Name
            $conn = new mysqli($host, $uname, $pass, $database);    
            $conn->set_charset("cp1250");

    //CSV To MYSQL MYADDMINPHP
            if (isset($_REQUEST['btn_import']))
            {
                $filename = 'cenik.csv';
                $fp = fopen($filename, "r");
				$sql = "DELETE FROM ceny";
				!$conn->query($sql);
				$sql=null;
				
                while (($row = fgetcsv($fp, "0", ",")) != FALSE)
                {
                    $sql = "INSERT INTO ceny (skupina,id,stroj,den,hodina,hodin,vikend,kauce) VALUES('" . implode("','", $row) . "')";
					/*INSERT INTO `stroje`.`TABLE 2` (`skupina`, `id`, `stroj`, `den`, `hodina`, `hodin`, `vikend`, `kauce`) VALUES */
                    if (!$conn->query($sql))
                    {
                        echo '<br><span style="text-decoration: underline">Data, která nebylo možno naimportovat:</span><br>' .implode("\",\"", $row);
                    }
                }
				echo '<p>Import proběhl snad v pořádku. :)</p>';
                fclose($fp);
            }
            ?>
        </body>
    </html>