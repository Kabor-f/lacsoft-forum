<?php //formulaire d'inscription
require_once 'config.php';//Connexion à la base de donnée

/*if(isset( $_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM users where id='$id'";
    $req=$bdd->query($sql) or die("Erreur");
    if($req){
        echo "Suppression effectuée";
    }
    header('Location:liste.php');
    die();
}
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if(!empty($id)  && is_numeric ($id))
    {
        $query = "DELETE FROM users WHERE id=$id";
        $bdd->exec($query);
        header("location:listes.php");
    }
}*/

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        if(!empty($id) && is_numeric ($id))
        {
            $query = "DELETE FROM users WHERE id=$id";
            $bdd->exec($query);
            header("Location:listes.php");
        }
    }
               

?>