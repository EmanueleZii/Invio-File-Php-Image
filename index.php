<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container ">
       <h3 class="text-center text-white">Invio di file</h3>
    </div>
     <div class="container justify-content-center">
            <div class="jumbotron">
                <form action="upload.php" method="post" enctype="multipart/form-data" class="form-group col-md-12 justify-content-center">
                 <input class="btn btn-primary  btn-lg" type="file" name="file"><br>
                 <br>
                <input class="btn btn-success btn-lg  " type="submit" value="UploadFile"><br>
            </div>
        </form>
        
    </div>

</body>
</html>