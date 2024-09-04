<?php

/**
 * @copyright   Copyright (C) 2024 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2024-09-04
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-forklift/0.0.1',
    array(
        // Identification
        //
        'label' => 'Datamodel: Forklift',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            '(itop-config-mgmt/2.5.0 & itop-config-mgmt/<3.0.0)||itop-structure/3.0.0',
            'itop-endusers-devices/2.7.5||itop-endusers-devices/3.0.0',
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(
            'model.br-forklift.php',
        ),
        'webservice' => array(),
        'data.struct' => array(),
        'data.sample' => array(),

        // Documentation
        //
        'doc.manual_setup' => '',
        'doc.more_information' => '',

        // Default settings
        //
        'settings' => array(),
    )
);
