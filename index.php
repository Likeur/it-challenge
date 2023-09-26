<?php
require "./class/Register.php";
$message = null;
$erreur = null;
if(isset($_POST['submit'])){
   if(isset($_POST['group_name']) && isset($_POST['first_member']) && isset($_POST['topic']) && $_POST['check'] === 'on'){

    $data = [
        'group_name' => htmlentities($_POST['group_name']),
        'first_member' => htmlentities($_POST['first_member']),
        'first_register' => htmlentities($_POST['first_register']),
        'first_email' => htmlentities($_POST['first_email']),
        'first_tel' => htmlentities($_POST['first_tel']),
        'first_bac' => htmlentities($_POST['first_bac']),
        'first_filiere' => htmlentities($_POST['first_filiere']),
        'second_member' => htmlentities($_POST['second_member']),
        'second_register' => htmlentities($_POST['second_register']),
        'second_email' => htmlentities($_POST['second_email']),
        'second_tel' => htmlentities($_POST['second_tel']),
        'second_bac' => htmlentities($_POST['second_bac']),
        'second_filiere' => htmlentities($_POST['second_filiere']),
        'third_member' => htmlentities($_POST['third_member']),
        'third_register' => htmlentities($_POST['second_register']),
        'third_email' => htmlentities($_POST['second_email']),
        'third_tel' => htmlentities($_POST['second_tel']),
        'third_bac' => htmlentities($_POST['second_bac']),
        'third_filiere' => htmlentities($_POST['second_filiere']),
        'topic' => htmlentities($_POST['topic']),
        'theme' => htmlentities($_POST['theme'])
    ];

        $register = new Register();
        $register->insertData($data);


        if($register){
            $message = "Vos informations ont été enregistré avec success";
        }else{
            $erreur = "Impossible d'enregistrer vos informations !";
        }


   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css"> 
</head>
<body>
    <main>
        <section class="p-4">
            <div class="flex flex-col items-center justify-center rounded-lg border-b-2 border-t-2  border-blue-900 p-4 ">
                <a href="" class="flex flex-col items-center">
                    
                    <img src="./img/logo.png" width="100" alt="">
                    <span class="font-semibold text-center text-2xl text-blue-950">It Challenge 2024 <br> Inscription</span>
                </a>
                <p class="mt-3 text-gray-600 text-center">Par Groupe de 3 , Remplissez tous les champs</p>
                    <b>
                        <?php if($message !== null) :?>
                            <?= $message ?>
                        <?php endif ?>
                        <?php if($erreur !== null) :?>
                            <?= $erreur ?>
                        <?php endif ?>
                    </b>
            </div>
            <div class="mt-5 flex justify-center p-4 border-t-2 border-blue-900 rounded-lg shadow-md">
                <div class="w-[95%]">
                    <form method="POST">
                        <input type="text" name="group_name" placeholder="Nom du groupe" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="text" name="first_member" placeholder="Nom du 1er membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="text" name="first_register" placeholder="Matricule 1er membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="email" name="first_email" placeholder="Votre email" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="tel" name="first_tel" placeholder="Votre Numero de telephone" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        
                        <div class="flex justify-between">
                            <select name="first_bac" id="" class="w-[55%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Promotion</option>
                                <option value="Bac1">Bac1</option>
                                <option value="Bac2">Bac2</option>
                                <option value="Bac3">Bac3</option>
                            </select>
                            <select name="first_filiere" id="" class="w-[40%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Filière</option>
                                <option value="si">SI</option>
                                <option value="gl">GL</option>
                                <option value="ia">IA</option>
                                <option value="ig">IG</option>
                            </select>
                        </div>
                        <input type="text" name="second_member" placeholder="Nom du 2e membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="text" name="second_register" placeholder="Matricule 2e membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="email" name="second_email" placeholder="Votre email" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="tel" name="second_tel" placeholder="Votre Numero de telephone" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <div class="flex justify-between">
                            <select name="second_bac" id="" class="w-[55%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Promotion</option>
                                <option value="Bac1">Bac1</option>
                                <option value="Bac2">Bac2</option>
                                <option value="Bac3">Bac3</option>
                            </select>
                            <select name="second_filiere" id="" class="w-[40%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Filière</option>
                                <option value="si">SI</option>
                                <option value="gl">GL</option>
                                <option value="ia">IA</option>
                                <option value="ig">IG</option>
                            </select>
                        </div>
                        <input type="text" name="third_member" placeholder="Nom du 3e membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="text" name="third_register" placeholder="Matricule 3e membre" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="email" name="third_email" placeholder="Votre email" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <input type="tel" name="third_tel" placeholder="Votre Numero de telephone" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <div class="flex justify-between">
                            <select name="third_bac" id="" class="w-[55%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Promotion</option>
                                <option value="Bac1">Bac1</option>
                                <option value="Bac2">Bac2</option>
                                <option value="Bac3">Bac3</option>
                            </select>
                            <select name="third_filiere" id="" class="w-[40%] outline-none rounded-lg p-3 mt-3 bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                                <option value="">Filière</option>
                                <option value="si">SI</option>
                                <option value="gl">GL</option>
                                <option value="ia">IA</option>
                                <option value="ig">IG</option>
                            </select>
                        </div>
                        <input type="text" name="topic" placeholder="Intitulé du projet" id="" class="rounded-lg border w-full mt-3 outline-none border-blue-900 p-2">
                        <select name="theme" id="" class="w-full rounded-lg p-3 mt-3 outline-none bg-blue-900 text-white text-lg font-semibold border border-blue-900 ">
                            <option value="">Choisissez le thème</option>
                            <option value="Fintech">Fintech</option>
                            <option value="Energie renouvelable">Energie renouvelable</option>
                            <option value="e-gouvernement">e-gouvernement</option>
                        </select>
                        <div class="mt-3">
                            <input required type="checkbox" name="check" id="check" class="">
                            <label for="check">Nous certifions sur l'honneur que les renseignements figurant sur le formulaire sont exactes et nous nous engageons à respecter les règles du concours</label>
                        </div>
                        <input name="submit" type="submit" value="S'inscrire" class="w-full mt-5 p-3 rounded-lg bg-blue-500 text-white">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>