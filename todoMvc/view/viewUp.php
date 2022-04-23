<div class="text-center">
    <h1>Modifier note</h1>
    <p class="para"><?= $articleV->list ?></p>
    <div class="w-50 m-auto">
        <form method="POST" autocomplete="off">
            <div class="form-group">
                <input class="form-control" type="text" name="list">
            </div><br>
            <button type="submit" class="btn btn-secondary" name="submitModif">modifier</button>
        </form>
    </div><br>
</div>