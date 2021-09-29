<div class="products index content">
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center row-eq-height">
            <?php foreach ($items as $product): ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?= $product['title'] ?></h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$<?= $product['price'] ?></h1>
                            <img class="img-fluid" style="width: 200px; height:250px" src="<?= $product['image'] ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="card-footer">
            <?= $this->Html->link('Buy now',['controller' => 'Products','action' => 'processPayment'], ["class" => "w-10 btn btn-lg float-right mb-5 btn-outline-primary"]) ?>
        </div>
    </div>
</div>

