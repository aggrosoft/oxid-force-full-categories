<?php

$sMetadataVersion = '1.1';

$aModule = array(
    'id'           => 'agforceloadcategories',
    'title'        => 'Force load all categories',
    'description'  => 'Load full category tree in frontend',
    'thumbnail'    => '',
    'version'      => '1.0.1',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        'oxcategorylist' => 'agforceloadcategories/extensions/models/agforceloadcategories_oxcategorylist'
    ),
    'files'       => array(

    ),
    'templates'   => array(

    ),
    'events'       => array(

    ),
    'settings' => array(
        ['group' => 'agforceloadcategories_main', 'name' => 'aAdditionalCategoryFields','type' => 'arr',   'value' => ''],
    ),
    'blocks' => array(

    )
);
