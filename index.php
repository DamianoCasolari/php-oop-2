<?php

include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/view/layout/head.php'; ?>

<body>
    <div class="my_container">
        <div class="p-5 mb-4 my_bg rounded-3 text-white">
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
                            <h6 class="card-subtitle mb-2 text-muted text-center">

                                <?= $pc->setType() ?>
                            </h6>
                            <div class="d-flex justify-content-center p-1 w-100 my-5">
                                <img src="<?= $pc->image ?>" class="opacity-1 w-100" />
                            </div>
                            <h5 class="card-title my-3 text-center">

                                <?= $pc->model ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">

                                <?= $pc->brand ?>
                            </h6>
                            <ul class="list-group list-group-flush">
                                <li class="card-text list-group-item">
                                    <b class="me-2"> RAM :</b>
                                    <ul class="list-unstyled">
                                        <li class="ms-2">
                                            <?= $pc->ram->type ?>
                                        </li>
                                        <li class="ms-2">
                                            <?= $pc->ram->capacity ?>
                                        </li>
                                    </ul>

                                </li>
                                <ul class="list-group list-group-flush">
                                    <li class="card-text list-group-item">
                                        <b> Storage :</b>
                                        <ul class="list-unstyled">
                                            <li class="ms-2">
                                                <?= $pc->storage->type ?>
                                            </li>
                                            <li class="ms-2">
                                                <?= $pc->storage->capacity ?>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="card-text list-group-item">
                                        <b>CPU :</b>
                                        <?= $pc->cpu ?>
                                    </li>
                                    <li class="card-text list-group-item">
                                        <b>Made in</b>
                                        <?= $pc->country ?>
                                    </li>
                                    <?php if ($pc instanceof Desktop): ?>

                                        <li class="card-text list-group-item">
                                            <b>Keyboard :</b>
                                            <?= $pc->keyboard ?>
                                        </li>
                                        <li class="card-text list-group-item">
                                            <b>Mouse :</b>
                                            <?= $pc->mouse ?>
                                        </li>
                                        <li class="card-text list-group-item">
                                            <b>PowerSource :</b>
                                            <?= $pc->powerSource ?>
                                        </li>

                                    <?php elseif ($pc instanceof Laptop): ?>

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