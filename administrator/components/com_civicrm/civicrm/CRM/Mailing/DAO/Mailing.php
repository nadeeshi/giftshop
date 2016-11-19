<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/Mailing/Mailing.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2ced8fea80d92e36fe16baa7daa73c7f)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Mailing_DAO_Mailing extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_mailing';
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which site is this mailing for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * FK to the header component.
   *
   * @var int unsigned
   */
  public $header_id;
  /**
   * FK to the footer component.
   *
   * @var int unsigned
   */
  public $footer_id;
  /**
   * FK to the auto-responder component.
   *
   * @var int unsigned
   */
  public $reply_id;
  /**
   * FK to the unsubscribe component.
   *
   * @var int unsigned
   */
  public $unsubscribe_id;
  /**
   *
   * @var int unsigned
   */
  public $resubscribe_id;
  /**
   * FK to the opt-out component.
   *
   * @var int unsigned
   */
  public $optout_id;
  /**
   * Mailing Name.
   *
   * @var string
   */
  public $name;
  /**
   * differentiate between standalone mailings, A/B tests, and A/B final-winner
   *
   * @var string
   */
  public $mailing_type;
  /**
   * From Header of mailing
   *
   * @var string
   */
  public $from_name;
  /**
   * From Email of mailing
   *
   * @var string
   */
  public $from_email;
  /**
   * Reply-To Email of mailing
   *
   * @var string
   */
  public $replyto_email;
  /**
   * Subject of mailing
   *
   * @var string
   */
  public $subject;
  /**
   * Body of the mailing in text format.
   *
   * @var longtext
   */
  public $body_text;
  /**
   * Body of the mailing in html format.
   *
   * @var longtext
   */
  public $body_html;
  /**
   * Should we track URL click-throughs for this mailing?
   *
   * @var boolean
   */
  public $url_tracking;
  /**
   * Should we forward replies back to the author?
   *
   * @var boolean
   */
  public $forward_replies;
  /**
   * Should we enable the auto-responder?
   *
   * @var boolean
   */
  public $auto_responder;
  /**
   * Should we track when recipients open/read this mailing?
   *
   * @var boolean
   */
  public $open_tracking;
  /**
   * Has at least one job associated with this mailing finished?
   *
   * @var boolean
   */
  public $is_completed;
  /**
   * FK to the message template.
   *
   * @var int unsigned
   */
  public $msg_template_id;
  /**
   * Should we overrite VERP address in Reply-To
   *
   * @var boolean
   */
  public $override_verp;
  /**
   * FK to Contact ID who first created this mailing
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time this mailing was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * FK to Contact ID who scheduled this mailing
   *
   * @var int unsigned
   */
  public $scheduled_id;
  /**
   * Date and time this mailing was scheduled.
   *
   * @var datetime
   */
  public $scheduled_date;
  /**
   * FK to Contact ID who approved this mailing
   *
   * @var int unsigned
   */
  public $approver_id;
  /**
   * Date and time this mailing was approved.
   *
   * @var datetime
   */
  public $approval_date;
  /**
   * The status of this mailing. Values: none, approved, rejected
   *
   * @var int unsigned
   */
  public $approval_status_id;
  /**
   * Note behind the decision.
   *
   * @var longtext
   */
  public $approval_note;
  /**
   * Is this mailing archived?
   *
   * @var boolean
   */
  public $is_archived;
  /**
   * In what context(s) is the mailing contents visible (online viewing)
   *
   * @var string
   */
  public $visibility;
  /**
   * The campaign for which this mailing has been initiated.
   *
   * @var int unsigned
   */
  public $campaign_id;
  /**
   * Remove duplicate emails?
   *
   * @var boolean
   */
  public $dedupe_email;
  /**
   *
   * @var int unsigned
   */
  public $sms_provider_id;
  /**
   * Key for validating requests related to this mailing.
   *
   * @var string
   */
  public $hash;
  /**
   * With email_selection_method, determines which email address to use
   *
   * @var int unsigned
   */
  public $location_type_id;
  /**
   * With location_type_id, determine how to choose the email address to use.
   *
   * @var string
   */
  public $email_selection_method;
  /**
   * Language of the content of the mailing. Useful for tokens.
   *
   * @var string
   */
  public $language;
  /**
   * class constructor
   *
   * @return civicrm_mailing
   */
  function __construct() {
    $this->__table = 'civicrm_mailing';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'header_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'footer_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'reply_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'unsubscribe_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'optout_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'msg_template_id', 'civicrm_msg_template', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'scheduled_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'approver_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'campaign_id', 'civicrm_campaign', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'sms_provider_id', 'civicrm_sms_provider', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'location_type_id', 'civicrm_location_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID') ,
          'required' => true,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Domain') ,
          'description' => 'Which site is this mailing for',
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'header_id' => array(
          'name' => 'header_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Header') ,
          'description' => 'FK to the header component.',
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'footer_id' => array(
          'name' => 'footer_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Footer') ,
          'description' => 'FK to the footer component.',
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'reply_id' => array(
          'name' => 'reply_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Reply') ,
          'description' => 'FK to the auto-responder component.',
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'unsubscribe_id' => array(
          'name' => 'unsubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Unsubscribe') ,
          'description' => 'FK to the unsubscribe component.',
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'resubscribe_id' => array(
          'name' => 'resubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Resubscribe') ,
        ) ,
        'optout_id' => array(
          'name' => 'optout_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Opt Out') ,
          'description' => 'FK to the opt-out component.',
          'FKClassName' => 'CRM_Mailing_DAO_Component',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Name') ,
          'description' => 'Mailing Name.',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'mailing_type' => array(
          'name' => 'mailing_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Type') ,
          'description' => 'differentiate between standalone mailings, A/B tests, and A/B final-winner',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Mailing_PseudoConstant::mailingTypes',
          )
        ) ,
        'from_name' => array(
          'name' => 'from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Name') ,
          'description' => 'From Header of mailing',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'from_email' => array(
          'name' => 'from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Email') ,
          'description' => 'From Email of mailing',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'replyto_email' => array(
          'name' => 'replyto_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Replyto Email') ,
          'description' => 'Reply-To Email of mailing',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'subject' => array(
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Subject') ,
          'description' => 'Subject of mailing',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'body_text' => array(
          'name' => 'body_text',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Text') ,
          'description' => 'Body of the mailing in text format.',
        ) ,
        'body_html' => array(
          'name' => 'body_html',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Html') ,
          'description' => 'Body of the mailing in html format.',
        ) ,
        'url_tracking' => array(
          'name' => 'url_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Url Tracking') ,
          'description' => 'Should we track URL click-throughs for this mailing?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'forward_replies' => array(
          'name' => 'forward_replies',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Forward Replies') ,
          'description' => 'Should we forward replies back to the author?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'auto_responder' => array(
          'name' => 'auto_responder',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto Responder') ,
          'description' => 'Should we enable the auto-responder?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'open_tracking' => array(
          'name' => 'open_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Track Mailing?') ,
          'description' => 'Should we track when recipients open/read this mailing?',
        ) ,
        'is_completed' => array(
          'name' => 'is_completed',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mailing Completed') ,
          'description' => 'Has at least one job associated with this mailing finished?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'msg_template_id' => array(
          'name' => 'msg_template_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Message Template') ,
          'description' => 'FK to the message template.',
          'FKClassName' => 'CRM_Core_DAO_MessageTemplate',
        ) ,
        'override_verp' => array(
          'name' => 'override_verp',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Override Verp') ,
          'description' => 'Should we overrite VERP address in Reply-To',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Creator') ,
          'description' => 'FK to Contact ID who first created this mailing',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Created Date') ,
          'description' => 'Date and time this mailing was created.',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'scheduled_id' => array(
          'name' => 'scheduled_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Scheduled By') ,
          'description' => 'FK to Contact ID who scheduled this mailing',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'scheduled_date' => array(
          'name' => 'scheduled_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Scheduled Date') ,
          'description' => 'Date and time this mailing was scheduled.',
        ) ,
        'approver_id' => array(
          'name' => 'approver_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approved By') ,
          'description' => 'FK to Contact ID who approved this mailing',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'approval_date' => array(
          'name' => 'approval_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mailing Approved Date') ,
          'description' => 'Date and time this mailing was approved.',
        ) ,
        'approval_status_id' => array(
          'name' => 'approval_status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approval Status') ,
          'description' => 'The status of this mailing. Values: none, approved, rejected',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'mail_approval_status',
            'optionEditPath' => 'civicrm/admin/options/mail_approval_status',
          )
        ) ,
        'approval_note' => array(
          'name' => 'approval_note',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Approval Note') ,
          'description' => 'Note behind the decision.',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_archived' => array(
          'name' => 'is_archived',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Mailing Archived?') ,
          'description' => 'Is this mailing archived?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'visibility' => array(
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Visibility') ,
          'description' => 'In what context(s) is the mailing contents visible (online viewing)',
          'maxlength' => 40,
          'size' => CRM_Utils_Type::BIG,
          'default' => 'Public Pages',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::groupVisibility',
          )
        ) ,
        'campaign_id' => array(
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Campaign') ,
          'description' => 'The campaign for which this mailing has been initiated.',
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'dedupe_email' => array(
          'name' => 'dedupe_email',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('No Duplicate emails?') ,
          'description' => 'Remove duplicate emails?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'sms_provider_id' => array(
          'name' => 'sms_provider_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing SMS Provider') ,
          'FKClassName' => 'CRM_SMS_DAO_Provider',
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'hash' => array(
          'name' => 'hash',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Hash') ,
          'description' => 'Key for validating requests related to this mailing.',
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
        'location_type_id' => array(
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Type') ,
          'description' => 'With email_selection_method, determines which email address to use',
          'FKClassName' => 'CRM_Core_DAO_LocationType',
          'pseudoconstant' => array(
            'table' => 'civicrm_location_type',
            'keyColumn' => 'id',
            'labelColumn' => 'display_name',
          )
        ) ,
        'email_selection_method' => array(
          'name' => 'email_selection_method',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Email Selection Method') ,
          'description' => 'With location_type_id, determine how to choose the email address to use.',
          'maxlength' => 20,
          'size' => CRM_Utils_Type::MEDIUM,
          'default' => 'automatic',
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::emailSelectMethods',
          )
        ) ,
        'language' => array(
          'name' => 'language',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Language') ,
          'description' => 'Language of the content of the mailing. Useful for tokens.',
          'maxlength' => 5,
          'size' => CRM_Utils_Type::SIX,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'languages',
            'keyColumn' => 'name',
            'optionEditPath' => 'civicrm/admin/options/languages',
          )
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing', $prefix, array());
    return $r;
  }
}
