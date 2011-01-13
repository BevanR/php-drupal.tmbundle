/**
 * Implements hook_node_submit().
 */
function <?php print $basename; ?>_node_submit(\$node, \$form, &\$form_state) {
  ${1:// Decompose the selected menu parent option into 'menu_name' and 'plid', if
  // the form used the default parent selection widget.
  if (!empty(\$form_state['values']['menu']['parent'])) {
    list(\$node->menu['menu_name'], \$node->menu['plid']) = explode(':', \$form_state['values']['menu']['parent']);
  \}}
}

$2