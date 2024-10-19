<?PHP
require_once "classes/Files.php";

$file = new Files( __DIR__ .'\test.txt');

$file->wriInfo("sanjar 1");
$file->wriInfo("sanjar 2");
?>
