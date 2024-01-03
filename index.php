<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Gallery</title>

    <style>
        .name {
            color: #ff0000
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Galleria di quadri</h1>
            </div>
        </div>
        <div class="row">
            
            <?php

            //credenziali collegamento
            $server = "localhost";
            $username = "oscargallery";
            $password = "";
            $database = "my_oscargallery";

            //connessione al database
            $conn = new mysqli($server, $username, $password, $database);

            //controllo connessione
            if ($conn->connect_error) {
                die ("connessione fallita: ". $conn->connect_error);
            }

            //preparazione della query
            $sql = "SELECT * FROM quadri";
            $result = $conn->query($sql);
            
            //risultati 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nome = $row['nome'];
                    $descrizione = $row['descrizione'];
                    $foto = $row['foto'];
                    
                    echo "<div class=\"col-12 col-sm-4 col-lg-3 col-xl-2 p-3\">\n";
                    echo "  <div class=\"card w-100\">\n";
                    echo "      <img src=\"$foto\" class=\"card-img-top\" alt=\"Foto quadro\">\n";
                    echo "      <div class=\"card-body\">\n";
                    echo "          <h5 class=\"card-title\">$nome</h5>\n";
                    echo "          <p class=\"card-text\">$descrizione</p>\n";
                    echo "          <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>\n";
                    echo "      </div>\n";
                    echo "  </div>\n";
                    echo "</div>\n";
                }
            } else {
                echo "<p>Nessun risultato<p>";
            }
            
            $conn->close();

            ?>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>