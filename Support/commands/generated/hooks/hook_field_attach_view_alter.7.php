/**
 * Implements hook_field_attach_view_alter().
 */
function <?php print $basename; ?>_field_attach_view_alter(&\$output, \$context) {
  ${1:// Append RDF term mappings on displayed taxonomy links.
  foreach (element_children(\$output) as \$field_name) {
    \$element = &\$output[\$field_name];
    if (\$element['#field_type'] == 'taxonomy_term_reference' && \$element['#formatter'] == 'taxonomy_term_reference_link') {
      foreach (\$element['#items'] as \$delta => \$item) {
        \$term = \$item['taxonomy_term'];
        if (!empty(\$term->rdf_mapping['rdftype'])) {
          \$element[\$delta]['#options']['attributes']['typeof'] = \$term->rdf_mapping['rdftype'];
        \}
        if (!empty(\$term->rdf_mapping['name']['predicates'])) {
          \$element[\$delta]['#options']['attributes']['property'] = \$term->rdf_mapping['name']['predicates'];
        \}
      \}
    \}
  \}}
}

$2