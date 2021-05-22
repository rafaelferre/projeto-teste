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
      <div class="container">
       <div class="row">
        <div class="col">       
         <h1>Smart Engine Solutions</h1>  
         <div class="form-control">
          <h3>Upload de arquivo para email</h3><br>  
       

<?php
  include_once("conexao.php");
  include_once('PHPExcel/Classes/PHPExcel.php');
  //VALIDANDO SE O USUÁRIO CLICOU NO BOTÃO
  $sendemail = filter_input(INPUT_POST, 'sendemail',FILTER_DEFAULT);
  //RECEBENDO DADOS DO FORMULARIO
  if ($sendemail) {    
    $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
    var_dump($email);
  } else{
    $_SESSION ['msg'] = "<p style='color: red'> Erro ao salvar os dados </p>";
      header("location: index.php");
    //var_dump($FILES);
  }
  

  $dados =$_FILES['arquivo']['name'];
  if (is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
   echo "File ". $_FILES['arquivo']['name'] ." uploaded successfully.\n";
   echo "Displaying contents\n";
   //readfile($_FILES['arquivo']['tmp_name']);
   //var_dump($dados);

//CRIANDO AS PASTA PARA GUARDAR OS ARQUIVOS
  $pasta = 'excel/';
 if (!is_dir($pasta)){
   mkdir($pasta,0755);
   }
   $novaPasta = 'csv/';
   if (!is_dir($novaPasta)){
    mkdir($novaPasta,0755);
   }

//SALVANDO O ARQUIVO DA PASTA TMP PARA A PASTA PERMANENTE
$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
//$pasta = "csv/";
$temporario = $_FILES['arquivo']['tmp_name'];
$novoNome = $_FILES['arquivo']['name'].".$extensao";
$file= $_FILES['arquivo']['name'];
if (move_uploaded_file($temporario, $pasta.$novoNome)):
  $mensagem = "upload feito com sucesso";
var_dump($novoNome);
  
else:
    $mensagem = "erro, nãofoi possívelfazer upload";
endif;
  echo $mensagem;


  //INSERINO ARQUIVOS NO BANCO DE DADOS

$sql="INSERT INTO arquivo (email,nome_arq) VALUES ('$email', '$file') ";
//$insert_sql = $conn->prepare($sql);
//$insert_sql->bindParam(':email', $email);
//$insert_sql->bindParam(':nome_arq', $file);

if (mysqli_query($conn, $sql)){
  echo "conexo realizada com sucesso";
}else "dados nao envido";
var_dump($sql);





// CONVERTENDO O ARQUIVO XLSX PARA CSV
/*  require_once('PHPExcel/Classes/PHPExcel.php');
 
//Usage:
 //convertXLStoCSV($novoNome,$outfile);
 
function convertXLStoCSV($novoNome,$outfile){
    $fileType = PHPExcel_IOFactory::identify($novoNome);
    $objReader = PHPExcel_IOFactory::createReader($fileType);
 
    $objReader->setReadDataOnly(true);   
    $objPHPExcel = $objReader->load($novoNome);    
 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "csv");
    $objWriter->save($outfile);
      
  }
    

var_dump($objWriter);
*/
//MOVER ARQUIVO PARA CSV

} else {
   echo "Possible file upload attack: ";
   echo "filename '". $_FILES['arquivo']['tmp_name'] . "'.";   
}


// $objReader = PHPExcel_IOFactory::createReader("Excel5");
//Excel5 is the type of excel file.
 
//$objReader->setReadDataOnly(true);   
//$objPHPExcel = $objReader->load("input.xls");

//$fileType=PHPExcel_IOFactory::identify($pasta);
//var_dump($fileType);


//INSERINDONO BANCO DE DADOS
/*
$arq_csv =$_FILES['arquivo']['name'];
move_uploaded_file ( $dados['arquivo'],"C:\xampp\htdocs\projeto\csv/".'csv' ) : bool
var_dump($arq_csv);
*/
 
   
 ?>  
        </div>
       </div>
      </div>
     </div>
     <div class="form-control">                          
             </div>
          </div>
         </form>
 