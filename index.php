<?php

include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/layout/head.php'; ?>

<body>
    <div class="my_container">
        <div class="p-5 mb-4 bg-dark rounded-3 text-white">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Computer Online</h1>
                <p class="col-md-8 fs-4">Everything you are looking for for your computer</p>
                <a href="#app" class="btn btn-primary btn-lg" type="button">Go to the shop</a>
            </div>
        </div>

        <div id="app" class=" d-flex flex-wrap">
            <?php foreach ($Computers as $pc): ?>
                <div class="p-3 col-6 col-md-3 col-xxl-2">
                    <div class="card my_card text-dark ">
                        <div class="card-body w-100">
                            <div class="d-flex justify-content-center p-2 w-100 ">
                                <img src="<?= $pc->image ?>" class="opacity-1 w-100" />
                            </div>
                            <h5 class="card-title my-3">
                                Model :
                                <?= $pc->model ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted ">
                                Brand :
                                <?= $pc->brand ?>
                            </h6>
                            <ul class="list-group list-group-flush">
                                <li class="card-text list-group-item">
                                    RAM :
                                    <?= $pc->ram ?>
                                </li>
                                <li class="card-text list-group-item">
                                    Storage :
                                    <?= $pc->storage ?>
                                </li>
                                <li class="card-text list-group-item">
                                    CPU :
                                    <?= $pc->cpu ?>
                                </li>
                                <li class="card-text list-group-item">
                                    Made in
                                    <?= $pc->country ?>
                                </li>
                                <?php if ($pc->type == 'Desktop'): ?>

                                    <li class="card-text list-group-item">
                                        <?= $pc->keyboard ?>
                                    </li>
                                    <li class="card-text list-group-item">
                                        <?= $pc->mouse ?>
                                    </li>
                                    <li class="card-text list-group-item">
                                        <?= $pc->powerSource ?>
                                    </li>

                                <?php elseif ($pc->type === 'Laptop'): ?>

                                    <li class="card-text list-group-item">
                                        <?= $pc->illuminatedKeyboard ? 'Illuminated Keyboard' : 'Non-Illuminated Keyboard' ?>
                                    </li>
                                    <li class="card-text list-group-item">
                                        <?= $pc->fingerprintReader ? 'Fingerprint Reader' : 'No Fingerprint Reader' ?>
                                    </li>
                                    <li class="card-text list-group-item">
                                        <?= $pc->CdPlayer ? 'CD Player' : 'No CD Player' ?>
                                    </li>

                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>
    </div>
    <!-- link axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
        integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link Vue.js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link javascript  -->
    <script src="./assets/js/app.js"></script>
</body>


</html>