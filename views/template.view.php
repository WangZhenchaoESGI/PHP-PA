<?php if (isset($_SESSION['id_restaurant']) && ($_SESSION['id_restaurant'] != $_GET['id'])):?>
    <link href="../public/admin/plugins/animate/animate.css" rel="stylesheet" type="text/css">

    <button style="display: none" id="display" type="button" class="btn btn-primary mt-3 btn-animation" data-animation="rollIn" data-toggle="modal" data-target="#exampleModalLong-1">
        RollIn
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle-1">Votre panier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Attention, si vous ajoutez un produit de ce restaurant, votre panier actuel sera vidé
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CONTINUEZ VOS ACHATS</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("display").click();
    </script>

<?php endif; ?>

<section id="section1">
    <div class="content-wrapper is-hidden-mobile">
        <div class="text-wrapper">
            <h1 class="headline-primary">
                Bievenue sur notre restaurant !
            </h1>
        </div>
    </div>
</section>

<section id="section2" class="grid__col--12 panel--centered">
    <h2 class="headline-secondary" style="color: red;">
        <?php if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        } ?>
    </h2>
    <h2 class="headline-secondary"><?php echo $resto['restaurant']['name']; ?></h2>
    <h3 class="headline-third"><?php echo $resto['restaurant']['description']; ?></h3>
</section>

<section class="container-fluid">
    <div class="row">
        <?php if (!empty($resto['dishes']) && $resto['dishes']!=NULL):?>

            <?php foreach ($resto['dishes'] as $key => $value):?>
                <div class="col-md-4" style="text-align: center">
                    <a href="/plat?id=<?php echo $value['id']; ?>" target="_blank">
                    <figure class="hero-image" style="background-image: url('../public/upload/<?php echo $value['image']; ?>');
                            <?php if ($resto['restaurant']['template']==2) :?>
                                    border-radius: 50px;
                                    background-repeat: no-repeat;
                            <?php endif; ?>
                            ">
                    </figure>
                    <p>
                        <?php echo $value['name']; ?>
                        <?php echo "<i style='color: darkgrey;'>Prix: ".$value['price']."€</i>"; ?>

                    </p>
                    </a>
                    <div class="hero-text">
                        <a class="btn--default" href="/plat?id=<?php echo $value['id']; ?>">Commandez</a>
                    </div>
                </div>

            <?php endforeach;?>

        <?php endif; ?>
    </div>
</section>