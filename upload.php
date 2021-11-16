<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark">
<?php
/*echo "<pre>";
print_r($_FILES);
echo "</pre>";*/

if (!isset($_FILES['file'])|| !is_uploaded_file($_FILES['file']['tmp_name']))
{
   echo "<h1 class='text-warning'>non caricato </h1>";
   exit;
}

$uploaddir = 'C:\xampp\htdocs\imagefile\uploads\ ';
$userfile = $_FILES['file']['tmp_name'];
$userfiles = $_FILES['file']['name'];

//move_uploaded_file($userfile,$uploaddir.$userfiles);

if (move_uploaded_file($userfile,$uploaddir.$userfiles)) {
  echo "<h1 class='text-center text-white bg-success'>File Caricato</h1>"."<br />";
}else {
    echo "<h1  class='text-warning'>Upload NON valido </h1>"."<br />";
}
//verificare la dimensione del file
if($_FILES['file']['size']>4194304) {
  echo "<h1>file troppo grande!!</h1>"."<br />";
  exit;
}

$target_file = 'C:\xampp\htdocs\imagefile\uploads\ ' .$_FILES['file']['name'];

if (file_exists($target_file))
{
  echo "<h5 class='text-center text-info'>File Esistente!!</h5>"."<br />";
  //readfile($target_file);
  $filestampa = "uploads\ ".$_FILES['file']['name'];
  echo "<h5 class='text-white text-center'>La tua immagine:</h5><br />";
  echo "<img src='$filestampa' height='400' width='600'><br />";
  exit;
}

$ext_ok = array('jpg' ,'png');
$temp = explode('.',$_FILES['file']['name']);
$ext = end($temp);
echo $dir;
if (!in_array($ext,$ext_ok)){
  echo "<h1>file ha un formato non supportato</h1>"."<br />";
  exit;
}
?>

</body>
</html>