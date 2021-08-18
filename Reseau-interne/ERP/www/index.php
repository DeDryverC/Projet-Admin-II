<div>
    <h3>Articles en vente</h3>
    <?php

    $servername = '135.125.101.201:3306';
    $username = 'admin';
    $password = "password";
    $dbname = 'woodytoys';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result= $conn->query("SELECT * FROM articles");

    while ($row = $result->fetch()) {
        echo $row['nom'] . " - " . $row['prix'] . "€ <br />\n";
    }

    if (isset($_POST['submit'])){
        $article = $_POST["article"];
        $prix = $_POST["prix"];

        $insert = "INSERT INTO articles VALUES ('$article', $prix)";
        $conn->exec($insert);
        echo "<meta http-equiv='refresh' content='0'>";
    }

    $conn = null;
    ?>
</div>



</body>
</html>