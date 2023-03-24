<?php
    $conn = new mysqli("localhost","root","","bibliotheque");
    $req = "SELECT id, prenom, email FROM client";
    $LesClients= $conn->query($req);
    $conn->close();
    $class=['table-primary','table-secondary','table-success','table-danger','table-warning','table-info'];
    $compteur = 0;
?>
<div class="container-fluid">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($LesClients as $UnClient){
    ?>
    <tr class="<?=$class[$compteur]?>">
      <th scope="row"><?=$UnClient['id']?></th>
      <td><?=$UnClient['prenom']?></td>
      <td><?=$UnClient['email']?></td>
      <td>
          <a href="./index.php?page=modificationu&id=<?=$UnClient['id']?>" class="btn btn-primary">Modifier</a> 
          <a href="./index.php?page=TraitementU&TraitementP=suppression&id=<?=$UnClient['id']?>" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    <?php
    $compteur++;
    if($compteur >=5){
        $compteur=0;
    }
    
    }
    ?>
  </tbody>
</table>
</div>