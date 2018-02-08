<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0">Consulta a la tabla libros

        </h1>
        <div class="subheading mb-5">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shop";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM books ORDER BY category_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    $xmlDom = new DOMDocument();
                    $xmlDom->appendChild($xmlDom->createElement('resultados'));
                    $xmlRoot = $xmlDom->documentElement;
                while ($row = mysqli_fetch_assoc($result)) {
                    $xmlRowElementNode = $xmlDom->createElement('fila');
                    $i = 0;
                    for ($i = 0; $i < mysqli_num_fields($result); $i++) {
                        $xmlRowElement = $xmlDom->createElement(mysqli_fetch_field($result)->name);
                        $xmlText = $xmlDom->createTextNode($row[$i]);
                        $xmlRowElement->appendChild($xmlText);
                        $xmlRowElementNode->appendChild($xmlRowElement);
                    }
                    $xmlRoot->appendChild($xmlRowElementNode);
                }
            } else  echo "No hay registros";
            $conn->close();
            header('Content-type:  text/xml');
            echo $xmlDom->saveXML();
            ?>
        </div>
    </div>
</section>