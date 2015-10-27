
<!-- Subpage title start -->
<section id="inner-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="inner-title-content">
                
                <?php
                $aPages = array(
                    'produit.php' => 'Produits',
                    'contact.php'=> 'Contact'
                );
                ?>
                <h2><?= $aPages[$name] ?></h2>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="<?= $name?>"><?= $aPages[$name]?></a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
 </section>
<!-- Subpage title end -->