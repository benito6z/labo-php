<div class="text-center">
<h1 class="text-primary mt-5">Créer un personnage</h1>
<hr/>
<?php
if(!empty($formError)):
?>
<div class="alert alert-danger">
  <p><?= isset($formError['surname']) ? $formError['surname'] : "" ?></p>
  <p><?= isset($formError['life']) ? $formError['life'] : "" ?></p>
  <p><?= isset($formError['atk']) ? $formError['atk'] : "" ?></p>
  <p><?= isset($formError['color']) ? $formError['color'] : "" ?></p>
</div>
<?php 
else:
endif;
if(isset($formSuccess['success'])):
?>
<div class="alert alert-success">
  <p><?= isset($formSuccess['success']) ? $formSuccess['success'] : "" ?></p>
</div>
<?php 
else:
endif;
?>
<p class="text-warning">Merci de renseigner le formulaire</p>
<form method="POST">
<div class="form-group mb-2">
    <label for="surname">Veuillez attriubuer un surnom au personnage</label>
    <input type="text" class="form-control" id="surname" name="surname" max-length="20"/>
</div>
<!--<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Veuillez selectionner une couleur</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="color">
    <?php foreach($select as $key => $value): ?>
    <option value="<?= $key ?>"><?= $value ?></option>
    <?php endforeach; ?>
  </select>
</div> -->
  <button type="submit" class="btn btn-success" name="btnCreate">Créer</button>
</form>
</div>

