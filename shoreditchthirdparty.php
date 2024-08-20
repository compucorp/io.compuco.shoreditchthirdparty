<?php

require_once 'shoreditchthirdparty.civix.php';
// phpcs:disable
use CRM_Shoreditchthirdparty_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function shoreditchthirdparty_civicrm_config(&$config) {
  _shoreditchthirdparty_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function shoreditchthirdparty_civicrm_install() {
  _shoreditchthirdparty_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function shoreditchthirdparty_civicrm_enable() {
  _shoreditchthirdparty_civix_civicrm_enable();
}

function shoreditchthirdparty_civicrm_coreResourceList(&$list, $region) {
  CRM_Core_Resources::singleton()->addStyleFile('io.compuco.shoreditchthirdparty', 'css/shoreditchforthirdparty.css', 1000, 'html-header');
}
