<?php

if (isset($_POST['submit'])) {

    $image = new image();
    
    $formError = [];


    if(!empty($_FILES['file']) && (!empty($_POST['titre']))){
        $tmpName = $_FILES['file']['tmp_name'];
        $nom = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $titre = $_POST['titre'];

        $tabExtension = explode('.', $nom);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        $formSucces['succes'] = "votre image a bien ete envoyer";


        if(in_array($extension, $extensions) && $error == 0){

            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $nom = $uniqueName.".".$extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            
            move_uploaded_file($tmpName, './upload/'.$nom);


            
        }
        else{
            echo "Une erreur est survenue";
        }
    } else {
            $formError['file'] = "fichier non validée!";
           var_dump($_POST);
    } if(empty($formError)){
        $image->name = $nom;
        $image->titre = $titre;
        $image->insertImages();
        echo $formSucces['succes'];
     }
     
}
