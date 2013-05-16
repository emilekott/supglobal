<?php
/*
 * 
 * Load some extra js for slideshow
 */

function sup_preprocess_views_view(&$vars) {
   $view = $vars['view'];
   // Make sure it's the correct view
  if($view->name == 'slideshow') {
     // add needed javascript
     drupal_add_js(drupal_get_path('theme', 'sup') . '/js/slider.js');
  }
}



function sup_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'search_block_form') {
        $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
        $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
        $form['search_block_form']['#size'] = 10;  // define size of the textfield
  
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search.png');

     
    }
   
}