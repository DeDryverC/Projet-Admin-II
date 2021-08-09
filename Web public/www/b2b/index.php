<html>
<head>
    <meta charset = "UTF-8">
    <title>WoodyToys revendeurs</title>
</head>
    <body style="font-family: Calibri">
    <h1> WoodyToys b2b</h1>
    <div>
        <h3>Mettre un article en vente</h3>
        <form method="POST">
            <label for="article">Article: </label>
            <input type="text" name="article" placeholder="nom de l'article">
            <label for="prix">Prix: </label>
            <input type="number" name="prix" placeholder="en euro">

            <input type="submit" name="submit" value="Mettre en vente">
        </form>

    </div>

    <div>
        <h3>Articles en vente</h3>
        <?php
        $servername = '135.125.101.201:3306';
        $username = 'admin';
        $password = "password";
        $dbname = 'woodytoys';
        $bdd = mysqli_connect($servername, $username, $password, $dbname) or die('Error connecting to woodytoys database');


        $mysql = "SELECT * FROM articles";
        $result = $bdd->query($mysql);
        while($row = $result->fetch_assoc()){
            echo $row["nom"]. " - " . $row["prix"] ."€" . "<br>";
        }


        if (isset($_POST['submit'])){
            $article = $_POST["article"];
            $prix = $_POST["prix"];

            $insert = "INSERT INTO articles VALUES ('$article', $prix)";
            if(mysqli_query($bdd, $insert)){
                header("Refresh:0");
            }
            else{
                echo "erreur";
            }
        }

        $bdd->close();
        ?>
    </div>



    </body>
</html>