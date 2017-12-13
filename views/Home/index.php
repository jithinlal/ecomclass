<div class="products_box">  
    <?php foreach($viewmodel as $key=>$value): ?>
        <?php if($key == 'products'): ?>
    <div id="single_product">
        <?php foreach($value as $product): ?>
            <h3><?php echo $product['product_title']; ?></h3>
        <?php endforeach; ?>        
    </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>