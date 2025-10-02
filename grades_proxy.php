<?php
// Proxy to fetch grades XML (avoids CORS issues)
header("Content-Type: application/xml");
echo file_get_contents("https://class-grades-cs.mywebcommunity.org/grades_api.php");
?>
