<div class="row fullScreen">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active activeTab text-orange" id="v-pills-add-dog-breed-tab" data-toggle="pill" href="#v-pills-add-dog-breed" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-dog fa-2x text-orange"></i> Ajouter un race de chien</a>
            <a class="nav-link text-orange" id="v-pills-edit-dog-breed-tab" data-toggle="pill" href="#v-pills-edit-dog-breed" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier une race de chien</a>
            <a class="nav-link text-orange" id="v-pills-add-cat-breed-tab" data-toggle="pill" href="#v-pills-add-cat-breed" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-cat fa-2x text-orange"></i> Ajouter une race de chat</a>
            <a class="nav-link text-orange" id="v-pills-edit-cat-breed-tab" data-toggle="pill" href="#v-pills-edit-cat-breed" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier une race de chat</a>
            <a class="nav-link text-orange" id="v-pills-add-owner-tab" data-toggle="pill" href="#v-pills-add-owner" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-alt fa-2x text-orange"></i> Ajouter un propietaire</a>
            <a class="nav-link text-orange" id="v-pills-edit-owner-tab" data-toggle="pill" href="#v-pills-edit-owner" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier un propietaire</a>
            <a class="nav-link text-orange" id="v-pills-add-dog-tab" data-toggle="pill" href="#v-pills-add-dog" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-dog fa-2x text-orange"></i> Ajouter un chien</a> 
            <a class="nav-link text-orange" id="v-pills-edit-dog-tab" data-toggle="pill" href="#v-pills-edit-dog" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier un chien</a>
            <a class="nav-link text-orange" id="v-pills-add-cat-tab" data-toggle="pill" href="#v-pills-add-cat" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cat fa-2x text-orange"></i> Ajouter un chat</a>
            <a class="nav-link text-orange" id="v-pills-edit-cat-tab" data-toggle="pill" href="#v-pills-edit-cat" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier un chat</a>
            <a class="nav-link text-orange" id="v-pills-add-medicine-tab" data-toggle="pill" href="#v-pills-add-medicine" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-pills fa-2x text-orange"></i> Ajouter un medicament</a>
            <a class="nav-link text-orange" id="v-pills-edit-medicine-tab" data-toggle="pill" href="#v-pills-edit-medicine" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-pencil-alt fa-2x text-orange"></i> Modifier un medicament</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-add-dog-breed" role="tabpanel" aria-labelledby="v-pills-add-dog-breed-tab">
                <?php include("addDogBreed.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-dog-breed" role="tabpanel" aria-labelledby="v-pills-edit-dog-breed-tab">...

            </div>
            <div class="tab-pane fade" id="v-pills-add-cat-breed" role="tabpanel" aria-labelledby="v-pills-add-cat-breed-tab">
                <?php include("addCatBreed.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-cat-breed" role="tabpanel" aria-labelledby="v-pills-edit-cat-breed-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-add-owner" role="tabpanel" aria-labelledby="v-pills-add-owner-tab">
                <?php include("addOwner.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-owner" role="tabpanel" aria-labelledby="v-pills-edit-owner-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-add-dog" role="tabpanel" aria-labelledby="v-pills-add-dog-tab">
                <?php include("addDog.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-dog" role="tabpanel" aria-labelledby="v-pills-edit-dog-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-add-cat" role="tabpanel" aria-labelledby="v-pills-add-cat-tab">
                <?php include("addCat.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-cat" role="tabpanel" aria-labelledby="v-pills-edit-dog-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-add-medicine" role="tabpanel" aria-labelledby="v-pills-add-medicine-tab">
                <?php include("addMedicine.php"); ?>
            </div>
            <div class="tab-pane fade" id="v-pills-edit-medicine" role="tabpanel" aria-labelledby="v-pills-edit-medicine-tab">...
            </div>
        </div>
    </div>
</div>
