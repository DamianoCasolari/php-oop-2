<?php

include __DIR__ . '/Models/Pc.php';
include __DIR__ . '/Models/Desktop.php';
include __DIR__ . '/Models/Laptop.php';
include __DIR__ . '/Models/Ram.php';
include __DIR__ . '/Models/Storage.php';
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/view/layout/head.php'; ?>

<body>
    <div id="app">

        <!-- SPINNER  -->

        <div v-if="!pageLoad">
            <div class="spinner_container">
                <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div v-else class="my_container">

            <!-- JUMBOTRON  -->

            <?php include __DIR__ . '/view/partials/jumbotron.php'; ?>

            <div class=" d-flex flex-wrap">

                <!-- TEMPLATE CARD OF ITEMS  -->

                <?php foreach ($Computers as $pc): ?>

                    <?php include __DIR__ . '/view/partials/templateCardPc.php'; ?>

                <?php endforeach ?>

            </div>
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