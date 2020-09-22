<?php
require_once 'header.php';
?>

<body >
    <div class="container mx-auto my-12" style="background: url(Asset/cafe.jpg); background-size:cover;">

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-2/4 border-solid border-4 border-gray-600">
                <!-- PROFIL -->
                <div>
                    <div class="flex justify-content">
                        <div class="rounded-full border-solid border-4 border-gray-600 overflow-hidden w-40 h-40 m-4">
                            <img src="Asset/tof.png" alt="">
                        </div>
                        <div class="m-auto">
                            <h2 class="text-lg mb-2 font-medium">NOM Prénom</h2>
                            <ul>

                                <li>35 ans - Lille.</li>
                                <li>Permis B - Mobile géographiquement</li>
                            </ul>
                        </div>
                    </div>
                    <h1 class="text-3xl mb-2 -mt-8 font-semibold text-center">Developpeur Web</h1>
                </div>

            </div>
            <div class="w-full md:w-1/2 lg:w-2/4 border-solid border-4 border-gray-600">

                <!-- Expérience & Formation -->
                <div>

                    <h1 class="text-2xl my-2">Experience</h1>
                    <?php foreach( $experiences as $experience ) : 
                            // var_dump($experience['exp_id']);
                            ?>
                    <div class="shadow m-3 p-3 text-lg xpLine action flex justify-between cursor-pointer bg-gray-200 bg-opacity-75" data-id="<?= $experience['exp_id'] ?>">
                        <p><?= $experience['exp_dateDebut'] ?> - <?= $experience['exp_dateFin'] ?> :
                            <strong><?= $experience['exp_poste'] ?></strong> <?= strtoupper($experience['exp_lieu']) ?>
                        </p>
                        <span class="block"><i class="fas fa-angle-down fa-2x"></i></span>
                    </div>
                    <?php endforeach;?>




                </div>

            </div>
        </div><!-- fin de la grid premier ligne -->

                        <!-- contenu dynamique -->
        <div class="flex flex-wrap">

            <div class="w-full md:w-1/2 lg:w-2/4 mb-10 p-5 border-solid border-4 border-green-600">

            <div class="content hidden leading-loose w-6/6 mx-auto" id="result">
   
                    <!-- Dynamic Content -->
      
            </div>
            <div  class="w-6/6 test hidden p-5">
                    <div class="bg-auto bg-center h-48" style="background: url(Asset/echec.jpg);">
                    <p>Test!</p>
                        
                    </div>
            </div>    
            </div>
            <div class="w-full md:w-1/2 lg:w-2/4 border-solid border-4 border-red-600">

        
                    <div class="w-full border-solid border-4 border-blue-600">

                        <h1 class="text-2xl my-2">Formation</h1>

                        <?php foreach( $formations as $formation ) : ?>
                        <div class="shadow m-4 p-4 text-xl flex justify-between bg-gray-200 bg-opacity-75">
                            <p><?= $formation['for_date'] ?> : <?= $formation['for_lieu'] ?>,
                                <?= $formation['for_intitule'] ?></p>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                    <div class="w-full border-solid border-4 border-blue-600">
                        col4
                    </div>
            </div>
        
        </div><!-- fin de la grid deuxieme ligne -->


        <div class="flex flex-wrap">

            <div class="lg:w-1/4 sm:w-full bg-gray-400 bg-opacity-75 m-4 shadow xpLine cursor-pointer">
                <h2 class="text-2xl text-center mt-2">Compétences</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold block mx-auto my-5 py-2 px-4 rounded">
                Voir
                </button>
            </div>

            <div class="lg:w-1/4 sm:w-full bg-gray-400 bg-opacity-75 m-4 shadow xpLine cursor-pointer">
                <h2 class="text-2xl text-center mt-2">Centre d'interet</h2>
                <button class="hobbies bg-blue-500 hover:bg-blue-700 text-white font-bold block mx-auto my-5 py-2 px-4 rounded">
            Voir
            </button>
            </div>

            <div class="lg:w-1/4 sm:w-full bg-gray-400 bg-opacity-75 m-4 shadow xpLine cursor-pointer">
                <h2 class="text-2xl text-center mt-2">Mes Valeurs</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold block mx-auto my-5 py-2 px-4 rounded">
                Voir
                </button>
            </div>
            
            <div class="lg:w-1/4 sm:w-full bg-gray-400 bg-opacity-75 m-4 shadow xpLine cursor-pointer">
                <h2 class="text-2xl text-center mt-2">Contact</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold block mx-auto my-5 py-2 px-4 rounded">
                Voir
                </button>
            </div>
            
                            


            
        </div><!-- fin de la grid troisieme ligne -->






   

<?php
require_once 'footer.php'
?>