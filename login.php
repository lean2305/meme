<?php 
//Ainda por acabar
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "meme";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn)
{
    die("Não tem conexão:".mysqli_connect_error());
}

$nome =  addslashes($_POST["user"]);
$senha = addslashes($_POST["Senha"]);

$query = mysqli_query($conn,"SELECT * FROM utilizador WHERE usuario = '".$nome." ' and senha = '".$senha."' ");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header("Location: pagina.html")

    $_SESSION['user'] = $nome;
    $_SESSION['Senha'] = $senha;
    echo "Benvindo:" .$nome;//para teste caso algo corra mal
    header("Location: home/home.php");//este codigo faz com que abra a pagina restrita
}

else if ($nr == 0)
{

    
    header("Location: login.html");
    


  // echo "Usuario não existe.";

}

?>