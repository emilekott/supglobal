<?php
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
 
<?php foreach ($rows as $columns): ?>
  <div class="grid-8 alpha omega">
    <?php foreach ($columns as $counter => $item): ?>
      <?php
        if ($counter == 0) {
          $alpha_omega = ' alpha';
        }
        elseif (count($columns) == ($counter + 1)) {
          $alpha_omega = ' omega';
        }
        else {
          $alpha_omega = '';
        }
      ?>
      <div class="grid-4<?php print $alpha_omega." views-row" ?>">
        <?php print $item; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>