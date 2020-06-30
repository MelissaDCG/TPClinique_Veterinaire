<div class="container fullScreen">  
    <h2 class="text-center my-4 text-orange">Nos patients félins</h2>
    <div class="row row-cols-1 row-cols-md-2">
    <?php foreach($cats as $cat) {?>
    <div class="card mb-3 mr-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="public/images/patients/<?=htmlspecialchars($cat->getPhoto())?>" class="card-img h-100" alt="photo patient">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title"><?=htmlspecialchars($cat->getNom())?></h5>
                    <?php  $manager = new CatBreedsManager;
                            $race = $manager->getRaceChat(intval($cat->getIdRace()));
                    ?>
                    <p class="card-text">Race : <?= $race->getNom()?>
                    <p class="card-text">Date de naissance : <?=date('d/m/Y',strtotime(htmlspecialchars($cat->getDateNaissance())))?></p>
                    <p class="card-text">Date de deces : <?php if (htmlspecialchars($cat->getDateDeces()) <> "0000-00-00") {
                        echo date('d/m/Y',strtotime(htmlspecialchars($cat->getDateDeces()))); } ?></p>
                    <?php  $manager = new PropietairesManager;
                            $propietaire = $manager->getPropietaire(intval($cat->getIdPropietaire()));
                    ?>
                    <p class="card-text">Propietaire : <?= $propietaire->getNom()." ".$propietaire->getPrenom()?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
</div> 