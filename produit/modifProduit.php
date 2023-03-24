<?php
if(isset($_GET['id'])){

    $id =$_GET['id'];
    $conn = new mysqli("localhost","root","","bibliotheque");
    $req = "SELECT * FROM  WHERE ID=$id";
    $res= $conn->query($req);
    $ligne = mysqli_fetch_assoc($res);
?>

<?php
    
}
?>