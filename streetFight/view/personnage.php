<div class="text-center">
<h1>Données de  <?= $perso->surname ?></h1>
  <?php if(isset($_GET['modify'])):?>

    <?php else:?>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Atk</th>
      <th scope="col">Life</th>
      <th scope="col">Color</th>
    </tr>
        <?php endif;?>
  </thead>
  <tbody>
      <?php if(isset($_GET['modify'])):
        if(isset($_GET['token']) && $_GET['token'] === $_SESSION['token']):
        ?>
        <form method="POST">
        <div class="form-group mb-3">
        <label for="atk">ATK</label>
          <input type="number"  id="atk" class="form-control" value="<?= $perso->atk ?>"  name="atk"/>
        </div>
        <div class="form-group mb-3">
        <label for="life">LIFE</label>
          <input type="number" id="life" class="form-control" value="<?= $perso->life ?>" name="life" />
        </div>
        <div class="form-group mb-3">
        <label for="color">COLOR</label>
            <input type="text" id="color" class="form-control" value="<?= $perso->color ?>" name="color" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-success" name="btnModify" value="modifier"/>
            <input type="submit" class="btn btn-sm btn-danger" name="btnDelete" value="supprimer"/>
        </div>
    </form>
    <?php else:?>
<p class="text-danger h1">ERROR 404</p>
    <?php endif; ?>
<?php else:?>
    <tr>
      <th scope="row"><?= $perso->id ?></th>
      <td><?= $perso->atk ?></td>
      <td><?php if($perso->life === '99'): ?>
    à la patate
    <?php else:?>
        <?= $perso->life ?>
    <?php endif; ?>
    </td>
      <td><?= $perso->color ?></td>
    </tr>
    <?php endif;?>
  </tbody>
</table>
<?php if(isset($_GET['modify'])):?>
    <?php else:?>
    <a href="index.php?id=<?= $perso->id ?>&modify=modify&token=<?= $_SESSION['token'] ?>"><button class="btn btn-lg btn-warning"><small>Modifier les données</small></button></a>
    <?php endif;?>
</div>