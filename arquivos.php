<?php

$nome = $_POST["nome"];
$arquivorg   	=   $_FILES["fotorg"];
$arquivocpf   	=   $_FILES["fotocpf"];
$contrato   	=   $_FILES["contrato"];
$cc   			=   $_FILES["cc"];
$res   			=   $_FILES["res"];
$intencionamento  = $_FILES["intencionamento"];
date_default_timezone_set('America/Sao_Paulo');

$hoje = date("H:i:s ... d/m/y");               


 	$ext = explode(".",$arquivorg["name"]); //[foto][ferias][jpg]
   $ext = array_reverse($ext); //[jpg][ferias][foto]
   $ext = $ext[0]; //jpg



    $ext1 = explode(".",$arquivocpf["name"]); //[foto][ferias][jpg]
   $ext1 = array_reverse($ext1); //[jpg][ferias][foto]
   $ext1 = $ext1[0];



    $ext2 = explode(".",$contrato["name"]); //[foto][ferias][jpg]
   $ext2 = array_reverse($ext2); //[jpg][ferias][foto]
   $ext2 = $ext2[0];


    $ext3 = explode(".",$cc["name"]); //[foto][ferias][jpg]
   $ext3 = array_reverse($ext3); //[jpg][ferias][foto]
   $ext3 = $ext3[0];


    $ext4 = explode(".",$res["name"]); //[foto][ferias][jpg]
   $ext4 = array_reverse($ext4); //[jpg][ferias][foto]
   $ext4 = $ext4[0];

    $ext5 = explode(".",$intencionamento["name"]); //[foto][ferias][jpg]
   $ext5 = array_reverse($ext5); //[jpg][ferias][foto]
   $ext5 = $ext5[0];




if(isset($arquivorg)){
if($ext != "jpg" && $ext != "png" && $ext != "pdf" && $ext != "jpeg" && $ext != " "){
        $msg0 = "Arquivo 1 inválido!";
   }else{
   }}


   if(isset($arquivocpf)){
if($ext1 != "jpg" && $ext1 != "png" && $ext1 != "pdf" && $ext1 != "jpeg" && $ext1 != " "){
          $msg0 = "Arquivo 2 inválido!";
   }else{
   }}


   if(isset($contrato)){
if($ext2 != "zip" && $ext2 != "rar" && $ext2 != "pdf" && $ext2 != " "){
          $msg0 = "Arquivo 3 inválido!";
   }else{
   }}


   if(isset($cc)){
if($ext3 != "jpg" && $ext3 != "png" && $ext3 != "pdf" && $ext3 != "jpeg" && $ext3 != "zip" && $ext3 != "rar" && $ext5 = " "){
          $msg0 = "Arquivo 4 inválido!";
   }else{
   }}


   if(isset($res)){
if($ext4 != "jpg" && $ext4 != "png" && $ext4 != "pdf" && $ext4 != "jpeg" && $ext4 != " "){
          $msg0 = "Arquivo 5 inválido!";
   }else{
   }}


   if(isset($intencionamento)){
if($ext5 != "jpg" && $ext5 != "png" && $ext5 != "pdf" && $ext5 != "jpeg" && $ext5 != "zip" && $ext5 != "rar" && $ext5 = " "){
          $msg0 = "Arquivo 6 inválido!";
   }else{
   }}
              
include_once "conexao.php";


$ex = "SELECT MAX(id) FROM operacional";
$puxanome = mysqli_query($con, $ex);
$id = mysqli_fetch_array($puxanome);



$nomerg = $nome."-RG.".$ext;
$nomecpf = $nome."-CPF.".$ext1;
$nomecontrato = $nome."-CONTRATOS.".$ext2;
$nomecontracheque = $nome."-CONTRACHEQUES.".$ext3;
$nomeresidencia = $nome."-RESIDENCIA.".$ext4;
$nomebonus = $nome."-BONUS.".$ext5;


$sql = "INSERT INTO  arquivosoperacional VALUES(null, '".$id[0]."' ,'".$nome."', '".$nomerg."', '".$nomecpf."',
  '".$nomecontrato."',  '".$nomecontracheque."',  '".$nomeresidencia."' , '".$nomebonus."', '".$hoje."')";



       
if( mysqli_query($con, $sql)){
      $folder = $nome;

   if(!is_dir("docs-clientes/".$folder)){
      $pasta = mkdir ("docs-clientes/".$folder, 0755);

      move_uploaded_file($arquivorg["tmp_name"],"docs-clientes/".$folder."/".$nomerg);

      move_uploaded_file($arquivocpf["tmp_name"],"docs-clientes/".$folder."/".$nomecpf);

      move_uploaded_file($contrato["tmp_name"],"docs-clientes/".$folder."/".$nomecontrato);

      move_uploaded_file($cc["tmp_name"],"docs-clientes/".$folder."/".$nomecontracheque);

      move_uploaded_file($res["tmp_name"],"docs-clientes/".$folder."/".$nomeresidencia);

      move_uploaded_file($intencionamento["tmp_name"],"docs-clientes/".$folder."/".$nomebonus);


   }else{

      move_uploaded_file($arquivorg["tmp_name"],"docs-clientes/".$folder."/".$nomerg);

      move_uploaded_file($arquivocpf["tmp_name"],"docs-clientes/".$folder."/".$nomecpf);

      move_uploaded_file($contrato["tmp_name"],"docs-clientes/".$folder."/".$nomecontrato);

      move_uploaded_file($cc["tmp_name"],"docs-clientes/".$folder."/".$nomecontracheque);

      move_uploaded_file($res["tmp_name"],"docs-clientes/".$folder."/".$nomeresidencia);

      move_uploaded_file($intencionamento["tmp_name"],"docs-clientes/".$folder."/".$nomebonus);

   }
	$msg = "Arquivos enviados! Por favor, acompanhe seu contrato.";

   ?>
   <script>
   alert('<?php echo $msg; ?>');

   location.href="propostas.php"; //redirecionamento em JS


   </script> <?php 
}else{
	$msg = "Erro no seu envio de arquivos de nº '".$msg0."'. Avalie a extensão do seu arquivo e tente novamente.";

   ?>
   <script>
   alert('<?php echo $msg; ?>');

   location.href="enviar-arquivos.php"; //redirecionamento em JS


   </script> <?php
}
?>