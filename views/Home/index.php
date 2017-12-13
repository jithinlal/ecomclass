<div class="content_wrapper">
    <div id="sidebar">        
        <?php foreach ($viewmodel as $key=>$value): ?>
            <?php if($key == 'categories'): ?>
        <div id="sidebar_title">
            Categories
        </div>
        <ul id="sidebar_contents">
            <?php foreach($value as $category): ?>
                <li><a href=""><?php echo $category['category_title']; ?></a></li>               
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
            <?php if($key == 'brands'): ?>
        <div id="sidebar_title">
            Brands
        </div>
        <ul id="sidebar_contents">
            <?php foreach($value as $brand): ?>
                <li><a href=""><?php echo $brand['brand_title']; ?></a></li>               
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>