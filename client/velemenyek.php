<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vélemények</title>
</head>
<body>
    <h1>Vélemények</h1>
    <form action="../server/velemeny.php" method="POST">
        <label for="v_nev">Név:</label>
        <input type="text" id="v_nev" name="v_nev"><br><br>

        <label for="v_email">E-mail cím:</label>
        <input type="email" id="v_email" name="v_email"><br><br>

        <label for="v_targy">Tárgy:</label>
        <input type="text" id="v_targy" name="v_targy"><br><br>

        <label for="v_szoveg">Vélemény:</label>
        <textarea id="v_szoveg" name="v_szoveg"></textarea><br><br>

        <input type="submit" value="Küldés">
    </form>
</body>
</html>