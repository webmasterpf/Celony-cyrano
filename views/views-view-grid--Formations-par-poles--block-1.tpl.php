<?php
// $Id: views-view-grid.tpl.php,v 1.3.4.1 2010/03/12 01:05:46 merlinofchaos Exp $
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 *
 * Template pour la vue-bloc Pole Tertiaire sur page Pôles formation
 *
 *
 */
?>
<?php
global $theme_path;
include ($theme_path.'/includes/inc_poles_table_formation.php');
?>