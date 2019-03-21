<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'plugins' => array(
        'xtype' => 'textfield',
        'value' => 'advlist autolink lists modximage charmap print preview anchor visualblocks searchreplace code fullscreen insertdatetime media table contextmenu paste modxlink',
        'area' => 'default',
    ),
    'toolbar1' => array(
        'xtype' => 'textfield',
        'value' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        'area' => 'tinymcerte.toolbar',
    ),
    'toolbar2' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'tinymcerte.toolbar',
    ),
    'toolbar3' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'tinymcerte.toolbar',
    ),
    'menubar' => array(
        'xtype' => 'textfield',
        'value' => 'file edit insert view format table tools',
        'area' => 'default',
    ),
    'statusbar' => array(
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'default',
    ),
    'image_advtab' => array(
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'default',
    ),
    'object_resizing' => array(
        'xtype' => 'textfield',
        'value' => '1',
        'area' => 'default',
    ),
    'style_formats' => array(
        'xtype' => 'textarea',
        'value' => '{"title": "Headers", "items": "headers_format"},{"title": "Inline", "items": "inline_format"},{"title": "Blocks", "items": "blocks_format"},{"title": "Alignment", "items": "alignment_format"}]',
        'area' => 'tinymcerte.style_formats',
    ),
    'headers_format' => array(
        'xtype' => 'textarea',
        'value' => '[{"title": "Header 1", "format": "h1"},{"title": "Header 2", "format": "h2"},{"title": "Header 3", "format": "h3"},{"title": "Header 4", "format": "h4"},{"title": "Header 5", "format": "h5"},{"title": "Header 6", "format": "h6"}]',
        'area' => 'tinymcerte.style_formats',
    ),
    'inline_format' => array(
        'xtype' => 'textarea',
        'value' => '[{"title": "Bold", "icon": "bold", "format": "bold"},{"title": "Italic", "icon": "italic", "format": "italic"},{"title": "Underline", "icon": "underline", "format": "underline"},{"title": "Strikethrough", "icon": "strikethrough", "format": "strikethrough"},{"title": "Superscript", "icon": "superscript", "format": "superscript"},{"title": "Subscript", "icon": "subscript", "format": "subscript"},{"title": "Code", "icon": "code", "format": "code"}]',
        'area' => 'tinymcerte.style_formats',
    ),
    'blocks_format' => array(
        'xtype' => 'textarea',
        'value' => '[{"title": "Paragraph", "format": "p"},{"title": "Blockquote", "format": "blockquote"},{"title": "Div", "format": "div"},{"title": "Pre", "format": "pre"}]',
        'area' => 'tinymcerte.style_formats',
    ),
    'alignment_format' => array(
        'xtype' => 'textarea',
        'value' => '[{"title": "Left", "icon": "alignleft", "format": "alignleft"},{"title": "Center", "icon": "aligncenter", "format": "aligncenter"},{"title": "Right", "icon": "alignright", "format": "alignright"},{"title": "Justify", "icon": "alignjustify", "format": "alignjustify"}]',
        'area' => 'tinymcerte.style_formats',
    ),
    'paste_as_text' => array(
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'default',
    ),
    'style_formats_merge' => array(
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'tinymcerte.style_formats',
    ),
    'link_class_list' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'default',
    ),
    'browser_spellcheck' => array(
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'default',
    ),
    'content_css' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'default',
    ),
    'image_class_list' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'default',
    ),
    'external_config' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'default',
    ),
    'skin' => array(
        'xtype' => 'textfield',
        'value' => 'modx',
        'area' => 'default',
    ),
    'relative_urls' => array(
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'default',
    ),
    'remove_script_host' => array(
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'default',
    ),
    'valid_elements' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'default',
    ),
    'links_across_contexts' => array(
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'default',
    )
);
foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'tinymcerte.' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
