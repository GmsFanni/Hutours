<h4>Foglald le valamelyik időpontot!</h4>
<table class="table table-striped">
    <thead class="thead-dark">
        <th>Helyeink idopontjai</th>
    </thead>
    <tbody>
        <?php
            require_once $_SERVER["DOCUMENT_ROOT"] . "/hutours/server/configDb.php";
            $sql = "SELECT Ido_id, Ido_mikoroda, Ido_oda, Ido_visszamikor, Ido_vissza FROM `idopontok` WHERE Ido_id = " . $_GET["id"];
            $stmt=$db->query($sql);
            while ($dt = $stmt->fetchAll()) {
                echo '
                <tr>

                    <td>'.$dt[0]['Ido_mikoroda'].'</td>
                    <td>'.$dt[0]['Ido_oda'].'</td>
                    <td>'.$dt[0]['Ido_visszamikor'].'</td>
                    <td>'.$dt[0]['Ido_vissza'].'</td>

                    
                    
                </tr>
                ';
            }
        ?>
    </tbody>
</table>

<script src="getData.js"></script>
<script>
    
</script>


        <?php require('labjegyzet.php'); ?>