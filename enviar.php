<?php 
$meta = $_POST['metaempresa'];
$metaequipe = $_POST['metaequipe'];
$metaconsultor = $_POST['metaconsultor'];


include 'conexao.php';

$sql = "insert into metas values(null, '".$meta."', '".$metaequipe."', '".$metaconsultor."')";

$result = mysqli_query($con, $sql);







?>
<script>
    location.href="menu.php"; //redirecionamento em JS
</script>