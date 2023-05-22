<div id="shop" class="p-3 col-6 col-md-3 col-xxl-2">
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
                    <b>Monitor :</b>
                    <?php

                    echo $pc->get_size();
                    ?>
                </li>

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