<div class="py-10 md:py-20 bg-gray-50">
    <div class="container mx-auto ">
        <h2 class="text-center text-2xl md:text-[50px] font-bold mb-8 md:mb-12">
            Comment ca marche ?
        </h2>
        <!-- p class="text-center mb-8"> Pour minimise le temps entre le commade et la livrision et automatise le prossidure avec 4 etaps :</p -->
        <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4">
            <?php
            $tab = array('Scanner','Composer','Valider & suivrer ','Traiter & liver');
            $dtab = array('Scanner le QR de carte menu ','Choiser la table et compose la commande','Valider & suivrer la commande','Traiter & liver la commande');
            for($i = 0; $i < 4; $i++) {
                ?>
                <div class="p-5 shadow-lg hover:scale-[102%] bg-white">
                    <img
                            src="dist/img/etap/<?php echo $i+1 ?>.jpg";
                            alt=""
                            width="80px"
                            height="80px"
                            class="mx-auto rounded-full mb-4"
                    />
                    <h3 class="mb-1 text-lg md:text-xl font-semibold"><?php echo $tab[$i] ?> </h3>
                    <p class="text-sm md:text-md font-light"><?php echo $dtab[$i] ?> </p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>