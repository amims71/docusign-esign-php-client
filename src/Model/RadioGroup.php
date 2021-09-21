<?php
/**
 * RadioGroup
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * RadioGroup Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RadioGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'radioGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditional_parent_label' => '?string',
        'conditional_parent_label_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'conditional_parent_value' => '?string',
        'conditional_parent_value_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'document_id' => '?string',
        'document_id_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'group_name' => '?string',
        'group_name_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'radios' => '\DocuSign\eSign\Model\Radio[]',
        'recipient_id' => '?string',
        'recipient_id_guid' => '?string',
        'recipient_id_guid_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'recipient_id_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'require_all' => '?string',
        'require_all_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'require_initial_on_shared_change' => '?string',
        'require_initial_on_shared_change_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'shared' => '?string',
        'shared_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'share_to_recipients' => '?string',
        'share_to_recipients_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'tab_type' => '?string',
        'tab_type_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'template_locked' => '?string',
        'template_locked_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'template_required' => '?string',
        'template_required_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'tooltip' => '?string',
        'tooltip_metadata' => '\DocuSign\eSign\Model\PropertyMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conditional_parent_label' => null,
        'conditional_parent_label_metadata' => null,
        'conditional_parent_value' => null,
        'conditional_parent_value_metadata' => null,
        'document_id' => null,
        'document_id_metadata' => null,
        'group_name' => null,
        'group_name_metadata' => null,
        'radios' => null,
        'recipient_id' => null,
        'recipient_id_guid' => null,
        'recipient_id_guid_metadata' => null,
        'recipient_id_metadata' => null,
        'require_all' => null,
        'require_all_metadata' => null,
        'require_initial_on_shared_change' => null,
        'require_initial_on_shared_change_metadata' => null,
        'shared' => null,
        'shared_metadata' => null,
        'share_to_recipients' => null,
        'share_to_recipients_metadata' => null,
        'tab_type' => null,
        'tab_type_metadata' => null,
        'template_locked' => null,
        'template_locked_metadata' => null,
        'template_required' => null,
        'template_required_metadata' => null,
        'tooltip' => null,
        'tooltip_metadata' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'conditional_parent_label' => 'conditionalParentLabel',
        'conditional_parent_label_metadata' => 'conditionalParentLabelMetadata',
        'conditional_parent_value' => 'conditionalParentValue',
        'conditional_parent_value_metadata' => 'conditionalParentValueMetadata',
        'document_id' => 'documentId',
        'document_id_metadata' => 'documentIdMetadata',
        'group_name' => 'groupName',
        'group_name_metadata' => 'groupNameMetadata',
        'radios' => 'radios',
        'recipient_id' => 'recipientId',
        'recipient_id_guid' => 'recipientIdGuid',
        'recipient_id_guid_metadata' => 'recipientIdGuidMetadata',
        'recipient_id_metadata' => 'recipientIdMetadata',
        'require_all' => 'requireAll',
        'require_all_metadata' => 'requireAllMetadata',
        'require_initial_on_shared_change' => 'requireInitialOnSharedChange',
        'require_initial_on_shared_change_metadata' => 'requireInitialOnSharedChangeMetadata',
        'shared' => 'shared',
        'shared_metadata' => 'sharedMetadata',
        'share_to_recipients' => 'shareToRecipients',
        'share_to_recipients_metadata' => 'shareToRecipientsMetadata',
        'tab_type' => 'tabType',
        'tab_type_metadata' => 'tabTypeMetadata',
        'template_locked' => 'templateLocked',
        'template_locked_metadata' => 'templateLockedMetadata',
        'template_required' => 'templateRequired',
        'template_required_metadata' => 'templateRequiredMetadata',
        'tooltip' => 'tooltip',
        'tooltip_metadata' => 'tooltipMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conditional_parent_label' => 'setConditionalParentLabel',
        'conditional_parent_label_metadata' => 'setConditionalParentLabelMetadata',
        'conditional_parent_value' => 'setConditionalParentValue',
        'conditional_parent_value_metadata' => 'setConditionalParentValueMetadata',
        'document_id' => 'setDocumentId',
        'document_id_metadata' => 'setDocumentIdMetadata',
        'group_name' => 'setGroupName',
        'group_name_metadata' => 'setGroupNameMetadata',
        'radios' => 'setRadios',
        'recipient_id' => 'setRecipientId',
        'recipient_id_guid' => 'setRecipientIdGuid',
        'recipient_id_guid_metadata' => 'setRecipientIdGuidMetadata',
        'recipient_id_metadata' => 'setRecipientIdMetadata',
        'require_all' => 'setRequireAll',
        'require_all_metadata' => 'setRequireAllMetadata',
        'require_initial_on_shared_change' => 'setRequireInitialOnSharedChange',
        'require_initial_on_shared_change_metadata' => 'setRequireInitialOnSharedChangeMetadata',
        'shared' => 'setShared',
        'shared_metadata' => 'setSharedMetadata',
        'share_to_recipients' => 'setShareToRecipients',
        'share_to_recipients_metadata' => 'setShareToRecipientsMetadata',
        'tab_type' => 'setTabType',
        'tab_type_metadata' => 'setTabTypeMetadata',
        'template_locked' => 'setTemplateLocked',
        'template_locked_metadata' => 'setTemplateLockedMetadata',
        'template_required' => 'setTemplateRequired',
        'template_required_metadata' => 'setTemplateRequiredMetadata',
        'tooltip' => 'setTooltip',
        'tooltip_metadata' => 'setTooltipMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conditional_parent_label' => 'getConditionalParentLabel',
        'conditional_parent_label_metadata' => 'getConditionalParentLabelMetadata',
        'conditional_parent_value' => 'getConditionalParentValue',
        'conditional_parent_value_metadata' => 'getConditionalParentValueMetadata',
        'document_id' => 'getDocumentId',
        'document_id_metadata' => 'getDocumentIdMetadata',
        'group_name' => 'getGroupName',
        'group_name_metadata' => 'getGroupNameMetadata',
        'radios' => 'getRadios',
        'recipient_id' => 'getRecipientId',
        'recipient_id_guid' => 'getRecipientIdGuid',
        'recipient_id_guid_metadata' => 'getRecipientIdGuidMetadata',
        'recipient_id_metadata' => 'getRecipientIdMetadata',
        'require_all' => 'getRequireAll',
        'require_all_metadata' => 'getRequireAllMetadata',
        'require_initial_on_shared_change' => 'getRequireInitialOnSharedChange',
        'require_initial_on_shared_change_metadata' => 'getRequireInitialOnSharedChangeMetadata',
        'shared' => 'getShared',
        'shared_metadata' => 'getSharedMetadata',
        'share_to_recipients' => 'getShareToRecipients',
        'share_to_recipients_metadata' => 'getShareToRecipientsMetadata',
        'tab_type' => 'getTabType',
        'tab_type_metadata' => 'getTabTypeMetadata',
        'template_locked' => 'getTemplateLocked',
        'template_locked_metadata' => 'getTemplateLockedMetadata',
        'template_required' => 'getTemplateRequired',
        'template_required_metadata' => 'getTemplateRequiredMetadata',
        'tooltip' => 'getTooltip',
        'tooltip_metadata' => 'getTooltipMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['conditional_parent_label'] = isset($data['conditional_parent_label']) ? $data['conditional_parent_label'] : null;
        $this->container['conditional_parent_label_metadata'] = isset($data['conditional_parent_label_metadata']) ? $data['conditional_parent_label_metadata'] : null;
        $this->container['conditional_parent_value'] = isset($data['conditional_parent_value']) ? $data['conditional_parent_value'] : null;
        $this->container['conditional_parent_value_metadata'] = isset($data['conditional_parent_value_metadata']) ? $data['conditional_parent_value_metadata'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_id_metadata'] = isset($data['document_id_metadata']) ? $data['document_id_metadata'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['group_name_metadata'] = isset($data['group_name_metadata']) ? $data['group_name_metadata'] : null;
        $this->container['radios'] = isset($data['radios']) ? $data['radios'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['recipient_id_guid'] = isset($data['recipient_id_guid']) ? $data['recipient_id_guid'] : null;
        $this->container['recipient_id_guid_metadata'] = isset($data['recipient_id_guid_metadata']) ? $data['recipient_id_guid_metadata'] : null;
        $this->container['recipient_id_metadata'] = isset($data['recipient_id_metadata']) ? $data['recipient_id_metadata'] : null;
        $this->container['require_all'] = isset($data['require_all']) ? $data['require_all'] : null;
        $this->container['require_all_metadata'] = isset($data['require_all_metadata']) ? $data['require_all_metadata'] : null;
        $this->container['require_initial_on_shared_change'] = isset($data['require_initial_on_shared_change']) ? $data['require_initial_on_shared_change'] : null;
        $this->container['require_initial_on_shared_change_metadata'] = isset($data['require_initial_on_shared_change_metadata']) ? $data['require_initial_on_shared_change_metadata'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['shared_metadata'] = isset($data['shared_metadata']) ? $data['shared_metadata'] : null;
        $this->container['share_to_recipients'] = isset($data['share_to_recipients']) ? $data['share_to_recipients'] : null;
        $this->container['share_to_recipients_metadata'] = isset($data['share_to_recipients_metadata']) ? $data['share_to_recipients_metadata'] : null;
        $this->container['tab_type'] = isset($data['tab_type']) ? $data['tab_type'] : null;
        $this->container['tab_type_metadata'] = isset($data['tab_type_metadata']) ? $data['tab_type_metadata'] : null;
        $this->container['template_locked'] = isset($data['template_locked']) ? $data['template_locked'] : null;
        $this->container['template_locked_metadata'] = isset($data['template_locked_metadata']) ? $data['template_locked_metadata'] : null;
        $this->container['template_required'] = isset($data['template_required']) ? $data['template_required'] : null;
        $this->container['template_required_metadata'] = isset($data['template_required_metadata']) ? $data['template_required_metadata'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['tooltip_metadata'] = isset($data['tooltip_metadata']) ? $data['tooltip_metadata'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets conditional_parent_label
     *
     * @return ?string
     */
    public function getConditionalParentLabel()
    {
        return $this->container['conditional_parent_label'];
    }

    /**
     * Sets conditional_parent_label
     *
     * @param ?string $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @return $this
     */
    public function setConditionalParentLabel($conditional_parent_label)
    {
        $this->container['conditional_parent_label'] = $conditional_parent_label;

        return $this;
    }

    /**
     * Gets conditional_parent_label_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getConditionalParentLabelMetadata()
    {
        return $this->container['conditional_parent_label_metadata'];
    }

    /**
     * Sets conditional_parent_label_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $conditional_parent_label_metadata conditional_parent_label_metadata
     *
     * @return $this
     */
    public function setConditionalParentLabelMetadata($conditional_parent_label_metadata)
    {
        $this->container['conditional_parent_label_metadata'] = $conditional_parent_label_metadata;

        return $this;
    }

    /**
     * Gets conditional_parent_value
     *
     * @return ?string
     */
    public function getConditionalParentValue()
    {
        return $this->container['conditional_parent_value'];
    }

    /**
     * Sets conditional_parent_value
     *
     * @param ?string $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.  If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
     *
     * @return $this
     */
    public function setConditionalParentValue($conditional_parent_value)
    {
        $this->container['conditional_parent_value'] = $conditional_parent_value;

        return $this;
    }

    /**
     * Gets conditional_parent_value_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getConditionalParentValueMetadata()
    {
        return $this->container['conditional_parent_value_metadata'];
    }

    /**
     * Sets conditional_parent_value_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $conditional_parent_value_metadata conditional_parent_value_metadata
     *
     * @return $this
     */
    public function setConditionalParentValueMetadata($conditional_parent_value_metadata)
    {
        $this->container['conditional_parent_value_metadata'] = $conditional_parent_value_metadata;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return ?string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_id_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getDocumentIdMetadata()
    {
        return $this->container['document_id_metadata'];
    }

    /**
     * Sets document_id_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $document_id_metadata document_id_metadata
     *
     * @return $this
     */
    public function setDocumentIdMetadata($document_id_metadata)
    {
        $this->container['document_id_metadata'] = $document_id_metadata;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return ?string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param ?string $group_name The name of the group.
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets group_name_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getGroupNameMetadata()
    {
        return $this->container['group_name_metadata'];
    }

    /**
     * Sets group_name_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $group_name_metadata group_name_metadata
     *
     * @return $this
     */
    public function setGroupNameMetadata($group_name_metadata)
    {
        $this->container['group_name_metadata'] = $group_name_metadata;

        return $this;
    }

    /**
     * Gets radios
     *
     * @return \DocuSign\eSign\Model\Radio[]
     */
    public function getRadios()
    {
        return $this->container['radios'];
    }

    /**
     * Sets radios
     *
     * @param \DocuSign\eSign\Model\Radio[] $radios Specifies the locations and status for radio buttons that are grouped together.
     *
     * @return $this
     */
    public function setRadios($radios)
    {
        $this->container['radios'] = $radios;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return ?string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param ?string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets recipient_id_guid
     *
     * @return ?string
     */
    public function getRecipientIdGuid()
    {
        return $this->container['recipient_id_guid'];
    }

    /**
     * Sets recipient_id_guid
     *
     * @param ?string $recipient_id_guid 
     *
     * @return $this
     */
    public function setRecipientIdGuid($recipient_id_guid)
    {
        $this->container['recipient_id_guid'] = $recipient_id_guid;

        return $this;
    }

    /**
     * Gets recipient_id_guid_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getRecipientIdGuidMetadata()
    {
        return $this->container['recipient_id_guid_metadata'];
    }

    /**
     * Sets recipient_id_guid_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $recipient_id_guid_metadata recipient_id_guid_metadata
     *
     * @return $this
     */
    public function setRecipientIdGuidMetadata($recipient_id_guid_metadata)
    {
        $this->container['recipient_id_guid_metadata'] = $recipient_id_guid_metadata;

        return $this;
    }

    /**
     * Gets recipient_id_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getRecipientIdMetadata()
    {
        return $this->container['recipient_id_metadata'];
    }

    /**
     * Sets recipient_id_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $recipient_id_metadata recipient_id_metadata
     *
     * @return $this
     */
    public function setRecipientIdMetadata($recipient_id_metadata)
    {
        $this->container['recipient_id_metadata'] = $recipient_id_metadata;

        return $this;
    }

    /**
     * Gets require_all
     *
     * @return ?string
     */
    public function getRequireAll()
    {
        return $this->container['require_all'];
    }

    /**
     * Sets require_all
     *
     * @param ?string $require_all When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @return $this
     */
    public function setRequireAll($require_all)
    {
        $this->container['require_all'] = $require_all;

        return $this;
    }

    /**
     * Gets require_all_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getRequireAllMetadata()
    {
        return $this->container['require_all_metadata'];
    }

    /**
     * Sets require_all_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $require_all_metadata require_all_metadata
     *
     * @return $this
     */
    public function setRequireAllMetadata($require_all_metadata)
    {
        $this->container['require_all_metadata'] = $require_all_metadata;

        return $this;
    }

    /**
     * Gets require_initial_on_shared_change
     *
     * @return ?string
     */
    public function getRequireInitialOnSharedChange()
    {
        return $this->container['require_initial_on_shared_change'];
    }

    /**
     * Sets require_initial_on_shared_change
     *
     * @param ?string $require_initial_on_shared_change Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @return $this
     */
    public function setRequireInitialOnSharedChange($require_initial_on_shared_change)
    {
        $this->container['require_initial_on_shared_change'] = $require_initial_on_shared_change;

        return $this;
    }

    /**
     * Gets require_initial_on_shared_change_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getRequireInitialOnSharedChangeMetadata()
    {
        return $this->container['require_initial_on_shared_change_metadata'];
    }

    /**
     * Sets require_initial_on_shared_change_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $require_initial_on_shared_change_metadata require_initial_on_shared_change_metadata
     *
     * @return $this
     */
    public function setRequireInitialOnSharedChangeMetadata($require_initial_on_shared_change_metadata)
    {
        $this->container['require_initial_on_shared_change_metadata'] = $require_initial_on_shared_change_metadata;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return ?string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param ?string $shared When set to **true**, this custom tab is shared.
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets shared_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getSharedMetadata()
    {
        return $this->container['shared_metadata'];
    }

    /**
     * Sets shared_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $shared_metadata shared_metadata
     *
     * @return $this
     */
    public function setSharedMetadata($shared_metadata)
    {
        $this->container['shared_metadata'] = $shared_metadata;

        return $this;
    }

    /**
     * Gets share_to_recipients
     *
     * @return ?string
     */
    public function getShareToRecipients()
    {
        return $this->container['share_to_recipients'];
    }

    /**
     * Sets share_to_recipients
     *
     * @param ?string $share_to_recipients 
     *
     * @return $this
     */
    public function setShareToRecipients($share_to_recipients)
    {
        $this->container['share_to_recipients'] = $share_to_recipients;

        return $this;
    }

    /**
     * Gets share_to_recipients_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getShareToRecipientsMetadata()
    {
        return $this->container['share_to_recipients_metadata'];
    }

    /**
     * Sets share_to_recipients_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $share_to_recipients_metadata share_to_recipients_metadata
     *
     * @return $this
     */
    public function setShareToRecipientsMetadata($share_to_recipients_metadata)
    {
        $this->container['share_to_recipients_metadata'] = $share_to_recipients_metadata;

        return $this;
    }

    /**
     * Gets tab_type
     *
     * @return ?string
     */
    public function getTabType()
    {
        return $this->container['tab_type'];
    }

    /**
     * Sets tab_type
     *
     * @param ?string $tab_type 
     *
     * @return $this
     */
    public function setTabType($tab_type)
    {
        $this->container['tab_type'] = $tab_type;

        return $this;
    }

    /**
     * Gets tab_type_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getTabTypeMetadata()
    {
        return $this->container['tab_type_metadata'];
    }

    /**
     * Sets tab_type_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $tab_type_metadata tab_type_metadata
     *
     * @return $this
     */
    public function setTabTypeMetadata($tab_type_metadata)
    {
        $this->container['tab_type_metadata'] = $tab_type_metadata;

        return $this;
    }

    /**
     * Gets template_locked
     *
     * @return ?string
     */
    public function getTemplateLocked()
    {
        return $this->container['template_locked'];
    }

    /**
     * Sets template_locked
     *
     * @param ?string $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        $this->container['template_locked'] = $template_locked;

        return $this;
    }

    /**
     * Gets template_locked_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getTemplateLockedMetadata()
    {
        return $this->container['template_locked_metadata'];
    }

    /**
     * Sets template_locked_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $template_locked_metadata template_locked_metadata
     *
     * @return $this
     */
    public function setTemplateLockedMetadata($template_locked_metadata)
    {
        $this->container['template_locked_metadata'] = $template_locked_metadata;

        return $this;
    }

    /**
     * Gets template_required
     *
     * @return ?string
     */
    public function getTemplateRequired()
    {
        return $this->container['template_required'];
    }

    /**
     * Sets template_required
     *
     * @param ?string $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        $this->container['template_required'] = $template_required;

        return $this;
    }

    /**
     * Gets template_required_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getTemplateRequiredMetadata()
    {
        return $this->container['template_required_metadata'];
    }

    /**
     * Sets template_required_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $template_required_metadata template_required_metadata
     *
     * @return $this
     */
    public function setTemplateRequiredMetadata($template_required_metadata)
    {
        $this->container['template_required_metadata'] = $template_required_metadata;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return ?string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param ?string $tooltip 
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets tooltip_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getTooltipMetadata()
    {
        return $this->container['tooltip_metadata'];
    }

    /**
     * Sets tooltip_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $tooltip_metadata tooltip_metadata
     *
     * @return $this
     */
    public function setTooltipMetadata($tooltip_metadata)
    {
        $this->container['tooltip_metadata'] = $tooltip_metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

