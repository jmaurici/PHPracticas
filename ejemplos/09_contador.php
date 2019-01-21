<?php
session_start();
if (isset($_POST['action']) && $_POST['action'] == "Destroy") {
    session_destroy();
    session_id(uniqid());
    session_start();
} else if (isset($_POST['action']) && $_POST['action'] == "Sumar")
    ++$_SESSION['contador'];
if (!isset($_SESSION['contador']))
    $_SESSION['contador'] = 0;
echo session_id() . "<BR/>";
?>
<form action=" <?= $_SERVER['REQUEST_URI'] ?>" method="POST">

    <input type="submit" name="action" value="Sumar"/>
    <input type="submit" name="action" value="Destroy"/>

    <input type="text" name="contador" value="<?= $_SESSION['contador'] ?> "/>
</form>
