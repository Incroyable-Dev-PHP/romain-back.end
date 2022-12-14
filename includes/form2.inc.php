<form action="/" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="card col-md-7 mx-auto my-1">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Prénom">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="surname" placeholder="Nom">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age (0 à 99 ans)</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Renseignez votre age">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Taille </span>
                <input type="number" class="form-control" name="height" step=".01" placeholder="1.78">
                <span class="input-group-text">m</span>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="Female" value="Femme">
                <label class="form-check-label" for="Female">Femme</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="Male" value="Homme">
                <label class="form-check-label" for="Male">Homme</label>
                <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="Other" value="Autre">
                <label class="form-check-label" for="Autre">Homme</label>
            </div>
        </div>
        <div class="card col-md-4 mx-auto my-1">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="HTML" id="html" name="html">
                <label for="html" class="form-check-label">HTML</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="CSS" id="css" name="css">
                <label for="css" class="form-check-label">CSS</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="JavaScript" id="javascript" name="javascript">
                <label for="javascript" class="form-check-label">JavaScript</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="PHP" id="php" name="php">
                <label for="php" class="form-check-label">PHP</label>
            </div>
           <div class="form-check">
                <input type="checkbox" class="form-check-input" value="Bootstrap" id="bootstrap" name="bootstrap">
                <label for="bootstrap" class="form-check-label">Bootstrap</label>
            </div>
            
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="React" id="react" name="react">
                <label for="react" class="form-check-label">React</label>
            </div>
            <div class="form-group">
                <label for="color" class="form-label">Couleur favorite</label>
                <input type="color" class="form-control" name="color" id="color">
            </div>
            <div class="form-group">
                <label for="date" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
        </div>
        <div class="card col-11 mx-auto my-1">
            <div class="mb-3">
                <label for="file" class="form-label"> image </label>
                <input class="form-control" name="file" type="file" id="file">
            </div>
        </div>
        <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit">Enregistrer les données</button>
        </div>
    </div>
</form>