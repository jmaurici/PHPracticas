<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0">Conexión a Base de datos con PDO

        </h1>
        <div class="subheading mb-5">
            <?php
            require "./includes/bd.php";
            $db = new DB();
            $conn=$db->getConexionPDO();
            try {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $categoria = 1;
                $sentencia = $conn->prepare("select * from books where category_id = :xyz");

                $sentencia->bindParam(":xyz", $categoria);
                $sql = "SELECT * FROM books where category_id =" . $categoria;

                $sentencia->execute();
                $results = $sentencia->fetchAll(PDO::FETCH_ASSOC);

                echo "<ul>";
                foreach ($results as $k => $v) {
                    echo "<li>";
                    foreach ($v as $k1 => $v1)
                        echo $k1 . " => " . $v1;
                    echo "</li>";
                }
                echo "</ul>";
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            } catch (Exception $ex) {
                echo $ex->getMessage();
            } finally {
                echo "Me ejecuto SIEMPRE";
                $conn = null;
            }
            ?>
        </div>
    </div>
</section>



