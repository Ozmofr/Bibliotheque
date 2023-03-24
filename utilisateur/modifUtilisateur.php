<?php
    $id = $_GET['id'];
    $conn = new mysqli("localhost","root","","bibliotheque");
    $req = "SELECT id, prenom, email FROM client where id = $id";
    $Lutilisateur= $conn->query($req);
    $conn->close();
    $ligne = mysqli_fetch_assoc($Lutilisateur);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 align-self-center" style="height: 50vh; display: flex; justify-content:center; align-items: center;">
            <div class="card" style="width: 800px; border: 3px solid black;">
                <div class="card-body">
                <h3>Modification de l'utilisateur : <?=$ligne['prenom']?></h3>
                <form action="./index.php?page=TraitementU&TraitementP=modif&id=<?=$ligne['id']?>" method="post">
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">prenom</span>
                        <input type="text" class="form-control" value="<?=$ligne['prenom']?>" name="prenom" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">email</span>
                        <input type="email" class="form-control" value="<?=$ligne['email']?>" name="email" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                        <input type="password" class="form-control" name="mdp"  placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-light" style="border: 1px solid black" type="submit">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>