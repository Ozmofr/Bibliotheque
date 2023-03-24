<?php
if(!isset($_GET['TraitementP'])){
    $_GET['TraitementP'] = "rien";
}
else{
    $conn = new mysqli("localhost","root","","bibliotheque");
}
switch($_GET['TraitementP']){
    case ('ajout'):
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        // chiffrer le mdp 
        $cout = ['cost' => 12];
        $hash = password_hash($mdp, PASSWORD_BCRYPT, $cout); 
        // requete
        $req ="INSERT INTO client (prenom, email, mdp) VALUES ('$prenom','$email','$hash')";
        $conn->query($req);
        header('Location: ./index.php?page=inscr');
        break;
    case ('login'):
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $requete = "SELECT mdp FROM client WHERE email='$email'";
        $resultat = $conn->query($requete);
        $ligne = mysqli_fetch_assoc($resultat);
        // comparer le mot de passe
        if(password_verify($mdp, $ligne['mdp'])){
            $req2 = "SELECT id, prenom, email FROM client WHERE email='$email'";
            $resultat = $conn->query($req2);
            $conn->close();
            $client = mysqli_fetch_assoc($resultat);
            session_start();
            $_SESSION['client'] = $client;
            header('Location: ./index.php?page=listep');
        }
        else {
            header('Location: ./index.php?page=inscr');
        }
        break;
    case ('logout'):
        session_destroy();
        header('Location: ./index.php?page=listep');
        break;
    case ('suppression'):
        $id = $_GET['id'];
        // on effectue la suppression par rapport à l'id
        $req="DELETE FROM client WHERE id=$id";
        $conn->query($req);
        $conn->close();
        // on renvoie vers la liste des clients
        header('Location: ./index.php?page=ListeU');
        break;
    case ('modif'):
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $id = $_GET['id'];
        // si l'image n'a pas été modifié:
        if(empty($mdp)|| !isset($mdp)){
            // pas de modif image
            $req = "UPDATE client 
            SET prenom='$prenom', 
            email='$email'
            WHERE id=$id";
            $conn->query($req);
            $conn->close();
            header('Location: ./index.php?page=ListeU');
        }
        else{
            $cout = ['cost' => 12];
            $hash = password_hash($mdp, PASSWORD_BCRYPT, $cout); 
            $req = "UPDATE client 
            SET prenom='$prenom', 
            email='$email', 
            mdp='$hash' 
            WHERE id=$id";
            $conn->query($req);
            $conn->close();
            header('Location: ./index.php?page=ListeU');
        }
        break;
    default:
        echo "Ne trichez pas monsieur le pirate";
        break;
}

?>
