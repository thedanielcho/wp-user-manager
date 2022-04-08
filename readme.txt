Fork of wpum repo to enable the use of select2 for single select dropdown fields when the stylized ui option is enabled in acf.
Requires a change in the wpum-acf plugin to work however.
/wpum-acf/includes/registration-form.php on line 59 I added an additional value for ui

$fields[ $field['key'] ] = array(
	'label'       => $label,
	'type'        => $type,
	'description' => $field['instructions'],
	'required'    => $field['required'],
	'value'       => $default,
	'priority'    => 100 + ( $i * 10 ) + $field['menu_order'],
	'options'     => $options,
	'ui'		  => $field['ui'],
);
