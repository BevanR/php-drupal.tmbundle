/**
 * Implements hook_file_load().
 */
function <?php print $basename; ?>_file_load(\$files) {
  ${1:// Add the upload specific data into the file object.
  \$result = db_query('SELECT * FROM {upload\} u WHERE u.fid IN (:fids)', array(':fids' => array_keys(\$files)))->fetchAll(PDO::FETCH_ASSOC);
  foreach (\$result as \$record) {
    foreach (\$record as \$key => \$value) {
      \$files[\$record['fid']]->\$key = \$value;
    \}
  \}}
}

$2