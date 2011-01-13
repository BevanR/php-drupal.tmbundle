/**
 * Implements hook_theme_registry_alter().
 */
function <?php print $basename; ?>_theme_registry_alter(&\$theme_registry) {
  ${1:// Kill the next/previous forum topic navigation links.
  foreach (\$theme_registry['forum_topic_navigation']['preprocess functions'] as \$key => \$value) {
    if (\$value = 'template_preprocess_forum_topic_navigation') {
      unset(\$theme_registry['forum_topic_navigation']['preprocess functions'][\$key]);
    \}
  \}}
}

$2