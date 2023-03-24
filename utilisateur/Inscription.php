<div class="container-fluid ">
    <div class="row center " >
        <div class="col-md-6 align-self-center" style="display: flex; justify-content:center;   align-items: center;">
            <div class="card" style="width: 800px; ">
                <div class="card-body" style="border: 3px solid black; border-radius=10px;  ">
                <h1>Inscription</h1>
                <form action="./index.php?page=TraitementU&TraitementP=ajout" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"  id="basic-addon1">Prenom</span>
                        <input type="text" class="form-control" name="prenom" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"  id="basic-addon1">Email</span>
                        <input type="email" class="form-control"  name="email" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                        <input type="password" class="form-control" name="mdp" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                        <button class="btn btn-warning" type="submit">S'inscrire</button>
                    </div> 
                </form>
            </div>
        </div>
        <div class="col-md-6 align-self-center" style="height: 92vh; background-color: grey; display: flex; justify-content:center;   align-items: center;">
        <div class="card" style="width: 700px; height:300px; border: 3px solid black;">
                <div class="card-body">
                <h1>Connexion</h1>
                <form action="./index.php?page=TraitementU&TraitementP=login" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" class="form-control" name="email" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                        <input type="password" class="form-control" name="mdp" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <button class="btn btn-light" style="border: 1px solid black" type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>