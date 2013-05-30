<?php
/**
 * @file
 * Default output for a FlexSlider object.
 */
?>
<div <?php print drupal_attributes($settings['attributes']) ?>>
    <?php print theme('flexslider_list', array('items' => $items, 'settings' => $settings)); ?>
    
        
    <?php
    if (!drupal_is_front_page()){
    if (arg(0) == 'node') {
        $nid = arg(1);
    }
    $node = node_load($nid);
    $title = $node->title;
    ?>
    <div class="slider-overlay">
        <div class="inner">
            <?php print($title); ?>
        </div>    
    </div>
    <?php } ?>
</div>
