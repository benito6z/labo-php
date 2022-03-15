<div class="text-center">
<h1 class="text-primary mt-5">List des personnages</h1>
<hr/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
    if(empty($personnages)):
      ?>
<p class="h1 text-danger text-font">Aucun personnage en base de donnée</p>
    <?php elseif(!empty($personnages)):
    foreach($personnages as $perso):
      ?>
      <td><a href="index.php?id=<?= $perso->id ?>"><?= $perso->surname ?></a></td>
    </tr>
    <?php endforeach;
    endif;
    ?>
  </tbody>
</table>
</div>

