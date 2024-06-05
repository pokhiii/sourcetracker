<?php

require_once 'sourcetracker.civix.php';

use CRM_Sourcetracker_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function sourcetracker_civicrm_config(&$config): void {
  _sourcetracker_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function sourcetracker_civicrm_install(): void {
  _sourcetracker_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function sourcetracker_civicrm_enable(): void {
  _sourcetracker_civix_civicrm_enable();
}

/**
 * Hook into CiviCRM form building process.
 *
 * @param string $formName
 *   The name of the form currently being processed.
 * @param CRM_Core_Form $form
 *   The form object currently being processed.
 *
 * @return void
 */
function sourcetracker_civicrm_buildForm($formName, &$form) {
  if (!$formName || !$form) {
    return;
  }

  $allowedForms = ['CRM_Profile_Form_Edit', 'CRM_Profile_Form_Dynamic'];

  if ( ! in_array( $formName, $allowedForms ) ) {
    return;
  }

  $fields = $form->_fields;

  $sourceFieldKey = false;

  foreach( $fields as $fieldKey => $fieldData ) {
    if ($fieldData['title'] === 'Source') {
      $sourceFieldKey = $fieldKey;
      break;
    }
  }

  if ( ! $sourceFieldKey ) {
    return;
  }
  
  /**
   * @see: https://github.com/civicrm/civicrm-core/blob/660c7261797f85a8bef413ff9eb6bebb102dfbe1/CRM/Utils/Request.php#L51-L72
   */
  $utmSource = CRM_Utils_Request::retrieve('utm_source', 'String', $form);

  if ( ! $utmSource ) {
    return;
  }

  $sourceDefault[$sourceFieldKey] = $utmSource;

  $form->setDefaults($sourceDefault);
}
