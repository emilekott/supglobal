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

function sup_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $crumbs = '<div class="breadcrumb">';
        $array_size = count($breadcrumb);
        $i = 0;
        while ($i < $array_size) {
            $crumbs .= '<span class="breadcrumb-' . $i;
            if ($i == 0) {
                $crumbs .= ' first';
            }
            /* if ($i+1 == $array_size) {
              $crumbs .= ' last';
              } */
            $crumbs .= '">' . $breadcrumb[$i] . '</span>&nbsp;&nbsp;>&nbsp;&nbsp;';
            $i++;
        }
        $crumbs .= '<span class="active">' . drupal_get_title() . '</span></div>';
        return $crumbs;
    }
}
