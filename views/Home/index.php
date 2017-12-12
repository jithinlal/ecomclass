<div class="content_wrapper">
    <div id="sidebar">        
        <?php foreach ($viewmodel as $key=>$value): ?>
            <?php if($key == 'key1'): ?>
        <div id="sidebar_title">
            Categories
        </div>
        <ul id="sidebar_contents">
            <?php foreach($value as $category): ?>
                <?php echo '<li><a href="">'.$category['category_title'].'</a></li>'; ?>                
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
            <?php if($key == 'key2'): ?>
        <div id="sidebar_title">
            Brands
        </div>
        <ul id="sidebar_contents">
            <?php foreach($value as $brand): ?>
                <?php echo '<li><a href="">'.$brand['brand_title'].'</a></li>'; ?>                
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>