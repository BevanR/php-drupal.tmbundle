/**
 * Implements hook_field_widget_settings_form().
 */
function <?php print $basename; ?>_field_widget_settings_form(\$field, \$instance) {
  ${1:\$widget = \$instance['widget'];
  \$settings = \$widget['settings'];

  if (\$widget['type'] == 'text_textfield') {
    \$form['size'] = array(
      '#type' => 'textfield',
      '#title' => t('Size of textfield'),
      '#default_value' => \$settings['size'],
      '#element_validate' => array('_element_validate_integer_positive'),
      '#required' => TRUE,
    );
  \}
  else {
    \$form['rows'] = array(
      '#type' => 'textfield',
      '#title' => t('Rows'),
      '#default_value' => \$settings['rows'],
      '#element_validate' => array('_element_validate_integer_positive'),
      '#required' => TRUE,
    );
  \}

  return \$form;}
}

$2