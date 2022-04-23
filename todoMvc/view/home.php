<div class="divLogo">
    <img class="logo" src="assets/media/logo.png">
</div>


<?php
    if(!empty($formError)):
?>
<div class="alert alert-danger">
    <p><?= isset($formError['list']) ? $formError['list'] : "" ?></p>
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
<div class="w-50 m-auto">
    <form method="POST" autocomplete="off">
        <div class="form-group">
            <input class="form-control" type="text" name="list" id="list">
        </div><br>
        <div class="divBtnCreate">
        <button class="btn btn-secondary" name="submit">ajouter</button>
        </div>
        
    </form>
</div><br>
<hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Mes notes</h1>
        <div id="lists">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            if(!empty($article)){
                                foreach($article as $classArticle){
                        ?>
                    
                        <th class="para" scope="row"><?= $classArticle->list ?></th>
                        <td>
                            <form method="POST">
                                <div class="btnClass">

                                <button type="submit" name="submitModification" class="btn btn-secondary" value=""><a class="aBtn" href="index.php?viewUp&idArticle=<?= $classArticle->id?>">modifier</a></button>
                                <button class="btn btn-danger" type="submit" name="submitDelet" value="<?= $classArticle->id ?>">supprimer</button>
                                </div>
                            

                                
                            </form>
                        </td>
                    </tr>
                      
                        <?php } } ?>

                </tbody>
            </table>