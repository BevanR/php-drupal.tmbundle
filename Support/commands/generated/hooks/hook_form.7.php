/**
 * Implements hook_form().
 */
function <?php print $basename; ?>_form(\$node, &\$form_state) {
  ${1:\$type = node_type_get_type(\$node);

  \$form['title'] = array(
    '#type' => 'textfield',
    '#title' => check_plain(\$type->title_label),
    '#default_value' => !empty(\$node->title) ? \$node->title : '',
    '#required' => TRUE, '#weight' => -5
  );

  \$form['field1'] = array(
    '#type' => 'textfield',
    '#title' => t('Custom field'),
    '#default_value' => \$node->field1,
    '#maxlength' => 127,
  );
  \$form['selectbox'] = array(
    '#type' => 'select',
    '#title' => t('Select box'),
    '#default_value' => \$node->selectbox,
    '#options' => array(
      1 => 'Option A',
      2 => 'Option B',
      3 => 'Option C',
    ),
    '#description' => t('Choose an option.'),
  );

  return \$form;}
}

$2