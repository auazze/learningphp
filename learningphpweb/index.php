<?php # include_once "doesnotexists.php";   # error warning - do not stop other parts of script ?>
<?php # require_once "doesnotexists.php";   # error fatal - stops script ?>

<?php include_once "nav.php"; ?>
<?php require_once "nav.php"; ?>

<?php

$data = include "example.php";
echo $data; # shows 2 from example.php

?>

<h1>Home page</h1>

