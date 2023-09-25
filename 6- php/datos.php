<?php include 'contact.html'; 
?>
<?php
if(isset($_POST['Enviar'])){
    trim(stripslashes(extract($_POST)));
    echo $nombre;
}

?>
