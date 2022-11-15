<form action="/" method="POST">
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Prénom">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="surname" placeholder="Nom">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age (18 à 70 ans)</label>
        <input type="number" class="form-control" id="age" name="age" placeholder=" age">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Taille (1,26m à 3m)</span>
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
    </div>
    <div class="col-12 text-end">
        <button class="btn btn-primary" type="submit">Enregistrer les données</button>
    </div>
</form>