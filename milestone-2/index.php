<?php
require __DIR__ . '/layout/head.php';
?>


<div id="app">

    <div class="container py-5">
        <div class="row justify-content-center">
                <div class="col-2 py-2" v-for="disco in dischi">
                    <div class="card h-100 text-center p-2 text-white">
                        <img :src="disco.poster" alt="">
                        <div class="card-body">
                            <h5> {{disco.title}} </h5>
                            <p class="mb-0 text-muted"> {{disco.author}} </p>
                            <small class="text-muted"> {{disco.year}} </small>
                        </div>
                    </div>
                </div>
        </div>
    </div>


</div>


<?php
require __DIR__ . '/layout/footer.php';
?>
