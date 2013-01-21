<?php 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
header("Content-type: text/html"); ?>
?>

<article>
<?php
$str = $_GET['akcija']; 

// control switch - route-x

switch ($str) {
    case 'tip1':
    case 'tip2':
    case 'tip3':
        include 'lib/'.$str.'.php';
        break;
    default:
        include 'lib/tip.php';
}
?>
</article>

<?php
if(extension_loaded('zlib')){ob_end_flush();}
?>
