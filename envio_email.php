<?php
session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>projeto</title>
  </head>
  <body>
     <div class="container">
      <div class="row">
       <div class="col">
         <h1>Smart Engine Solutions</h1>
         <?php
             if (isset($_SESSION ['msg'])){
             	echo $_SESSION ['msg'];
             	unset($_SESSION ['msg']);
             }
         ?>
         
          <div class="form-control">
           <h3>Upload de arquivo para email</h3><br>
             <label for="email" class="form-label" >Email para destino: </label>
             <input type="email" class="form-control" name="email" placeholder="inserir email de destino" required><br><br>
                          <div class="form-control">
                             <label for="arquivo" class="form-label" >Arquivo </label>
                <input type="file" class="form-control" name="arquivo" required><br><br>
                <input type="submit" name="sendemail" class="btn btn-primary" value="Enviar">
             </div>
          </div>
         


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>













           
		   
		   
		   