<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0">Conexión a Base de datos

        </h1>
        <div class="subheading mb-5">
            <?php
           require "./includes/bd.php";
            $db = new DB();
            $conn=$db->getConexionMysqli();


            if ($conn->connect_error) {
                die("Fallo al conectar: " . $conn->connect_error);
            }
            echo "Conexión establecida...<br/>";

            $sql = "select * from booksx";
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



