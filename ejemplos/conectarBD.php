<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0">Conexión a Base de datos

        </h1>
        <div class="subheading mb-5">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database="shop";

            // Create connection
            $conn = new mysqli($servername, $username, $password,$database);
            // Check connection
            if ($conn->connect_error) {
                die("Fallo al conectar: " . $conn->connect_error);
            }
            // Create database
            $sql = "select * from books";
            if ($conn->query($sql) ) {
                echo "Consulta realizada";
            } else {
                echo "Problema en la consulta: " . $conn->error;
            }
            $conn->close();
            ?>
        </div>
    </div>
</section>



