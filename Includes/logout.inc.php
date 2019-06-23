<?php
session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
// voor testen: header("Location: ../fakeindex.php");
?>
