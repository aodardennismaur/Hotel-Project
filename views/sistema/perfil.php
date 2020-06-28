<?php require 'header.php'; ?>
<?php 
    $var = json_decode(json_encode($_SESSION, true),true);
    echo $var['correo'];
?>

<?php require 'footer.php'; ?>