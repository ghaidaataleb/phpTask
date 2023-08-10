<?php
if (isset($_GET["url"]) && !empty($_GET["url"])) {
    $url = $_GET["url"];
    header("Location: $url");
    exit();
}
?>
