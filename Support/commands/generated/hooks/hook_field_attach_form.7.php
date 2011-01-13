/**
 * Implements hook_field_attach_form().
 */
function <?php print $basename; ?>_field_attach_form(\$entity_type, \$entity, &\$form, &\$form_state, \$langcode) {
  ${1:// Add a checkbox allowing a given field to be emptied.
  // See hook_field_attach_submit() for the corresponding processing code.
  \$form['empty_field_foo'] = array(
    '#type' => 'checkbox',
    '#title' => t("Empty the 'field_foo' field"),
  );}
}

$2