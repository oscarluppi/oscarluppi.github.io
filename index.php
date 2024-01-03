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

            $prodotti = array(
                "p1" => "prova1",
                "p2" => "prova2",
                "p3" => "prova3",
                "p4" => "prova4",
                "p5" => "prova5",
                "p6" => "prova6",
                "p7" => "prova7"
            );

            foreach ($prodotti as $nome => $descrizione) {

                echo "<div class=\"col-12 col-sm-4 col-lg-3 col-xl-2 p-3\">\n";
                echo "  <div class=\"card w-100\">\n";
                echo "      <img src=\"img/nuke bot.jpg\" class=\"card-img-top\" alt=\"Foto quadro\">\n";
                echo "      <div class=\"card-body\">\n";
                echo "          <h5 class=\"card-title\">$nome</h5>\n";
                echo "          <p class=\"card-text\">$descrizione</p>\n";
                echo "          <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>\n";
                echo "      </div>\n";
                echo "  </div>\n";
                echo "</div>\n";
            }

            ?>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>