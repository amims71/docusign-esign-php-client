<?php
/**
 * Decline
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
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
 * Decline Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Decline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'decline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anchor_case_sensitive' => 'string',
        'anchor_horizontal_alignment' => 'string',
        'anchor_ignore_if_not_present' => 'string',
        'anchor_match_whole_word' => 'string',
        'anchor_string' => 'string',
        'anchor_units' => 'string',
        'anchor_x_offset' => 'string',
        'anchor_y_offset' => 'string',
        'bold' => 'string',
        'button_text' => 'string',
        'conditional_parent_label' => 'string',
        'conditional_parent_value' => 'string',
        'custom_tab_id' => 'string',
        'decline_reason' => 'string',
        'document_id' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'font' => 'string',
        'font_color' => 'string',
        'font_size' => 'string',
        'height' => 'int',
        'italic' => 'string',
        'merge_field' => '\DocuSign\eSign\Model\MergeField',
        'page_number' => 'string',
        'recipient_id' => 'string',
        'status' => 'string',
        'tab_group_labels' => 'string[]',
        'tab_id' => 'string',
        'tab_label' => 'string',
        'tab_order' => 'string',
        'template_locked' => 'string',
        'template_required' => 'string',
        'tooltip' => 'string',
        'underline' => 'string',
        'width' => 'int',
        'x_position' => 'string',
        'y_position' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anchor_case_sensitive' => null,
        'anchor_horizontal_alignment' => null,
        'anchor_ignore_if_not_present' => null,
        'anchor_match_whole_word' => null,
        'anchor_string' => null,
        'anchor_units' => null,
        'anchor_x_offset' => null,
        'anchor_y_offset' => null,
        'bold' => null,
        'button_text' => null,
        'conditional_parent_label' => null,
        'conditional_parent_value' => null,
        'custom_tab_id' => null,
        'decline_reason' => null,
        'document_id' => null,
        'error_details' => null,
        'font' => null,
        'font_color' => null,
        'font_size' => null,
        'height' => 'int32',
        'italic' => null,
        'merge_field' => null,
        'page_number' => null,
        'recipient_id' => null,
        'status' => null,
        'tab_group_labels' => null,
        'tab_id' => null,
        'tab_label' => null,
        'tab_order' => null,
        'template_locked' => null,
        'template_required' => null,
        'tooltip' => null,
        'underline' => null,
        'width' => 'int32',
        'x_position' => null,
        'y_position' => null
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
        'anchor_case_sensitive' => 'anchorCaseSensitive',
        'anchor_horizontal_alignment' => 'anchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'anchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'anchorMatchWholeWord',
        'anchor_string' => 'anchorString',
        'anchor_units' => 'anchorUnits',
        'anchor_x_offset' => 'anchorXOffset',
        'anchor_y_offset' => 'anchorYOffset',
        'bold' => 'bold',
        'button_text' => 'buttonText',
        'conditional_parent_label' => 'conditionalParentLabel',
        'conditional_parent_value' => 'conditionalParentValue',
        'custom_tab_id' => 'customTabId',
        'decline_reason' => 'declineReason',
        'document_id' => 'documentId',
        'error_details' => 'errorDetails',
        'font' => 'font',
        'font_color' => 'fontColor',
        'font_size' => 'fontSize',
        'height' => 'height',
        'italic' => 'italic',
        'merge_field' => 'mergeField',
        'page_number' => 'pageNumber',
        'recipient_id' => 'recipientId',
        'status' => 'status',
        'tab_group_labels' => 'tabGroupLabels',
        'tab_id' => 'tabId',
        'tab_label' => 'tabLabel',
        'tab_order' => 'tabOrder',
        'template_locked' => 'templateLocked',
        'template_required' => 'templateRequired',
        'tooltip' => 'tooltip',
        'underline' => 'underline',
        'width' => 'width',
        'x_position' => 'xPosition',
        'y_position' => 'yPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anchor_case_sensitive' => 'setAnchorCaseSensitive',
        'anchor_horizontal_alignment' => 'setAnchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'setAnchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'setAnchorMatchWholeWord',
        'anchor_string' => 'setAnchorString',
        'anchor_units' => 'setAnchorUnits',
        'anchor_x_offset' => 'setAnchorXOffset',
        'anchor_y_offset' => 'setAnchorYOffset',
        'bold' => 'setBold',
        'button_text' => 'setButtonText',
        'conditional_parent_label' => 'setConditionalParentLabel',
        'conditional_parent_value' => 'setConditionalParentValue',
        'custom_tab_id' => 'setCustomTabId',
        'decline_reason' => 'setDeclineReason',
        'document_id' => 'setDocumentId',
        'error_details' => 'setErrorDetails',
        'font' => 'setFont',
        'font_color' => 'setFontColor',
        'font_size' => 'setFontSize',
        'height' => 'setHeight',
        'italic' => 'setItalic',
        'merge_field' => 'setMergeField',
        'page_number' => 'setPageNumber',
        'recipient_id' => 'setRecipientId',
        'status' => 'setStatus',
        'tab_group_labels' => 'setTabGroupLabels',
        'tab_id' => 'setTabId',
        'tab_label' => 'setTabLabel',
        'tab_order' => 'setTabOrder',
        'template_locked' => 'setTemplateLocked',
        'template_required' => 'setTemplateRequired',
        'tooltip' => 'setTooltip',
        'underline' => 'setUnderline',
        'width' => 'setWidth',
        'x_position' => 'setXPosition',
        'y_position' => 'setYPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anchor_case_sensitive' => 'getAnchorCaseSensitive',
        'anchor_horizontal_alignment' => 'getAnchorHorizontalAlignment',
        'anchor_ignore_if_not_present' => 'getAnchorIgnoreIfNotPresent',
        'anchor_match_whole_word' => 'getAnchorMatchWholeWord',
        'anchor_string' => 'getAnchorString',
        'anchor_units' => 'getAnchorUnits',
        'anchor_x_offset' => 'getAnchorXOffset',
        'anchor_y_offset' => 'getAnchorYOffset',
        'bold' => 'getBold',
        'button_text' => 'getButtonText',
        'conditional_parent_label' => 'getConditionalParentLabel',
        'conditional_parent_value' => 'getConditionalParentValue',
        'custom_tab_id' => 'getCustomTabId',
        'decline_reason' => 'getDeclineReason',
        'document_id' => 'getDocumentId',
        'error_details' => 'getErrorDetails',
        'font' => 'getFont',
        'font_color' => 'getFontColor',
        'font_size' => 'getFontSize',
        'height' => 'getHeight',
        'italic' => 'getItalic',
        'merge_field' => 'getMergeField',
        'page_number' => 'getPageNumber',
        'recipient_id' => 'getRecipientId',
        'status' => 'getStatus',
        'tab_group_labels' => 'getTabGroupLabels',
        'tab_id' => 'getTabId',
        'tab_label' => 'getTabLabel',
        'tab_order' => 'getTabOrder',
        'template_locked' => 'getTemplateLocked',
        'template_required' => 'getTemplateRequired',
        'tooltip' => 'getTooltip',
        'underline' => 'getUnderline',
        'width' => 'getWidth',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition'
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
        $this->container['anchor_case_sensitive'] = isset($data['anchor_case_sensitive']) ? $data['anchor_case_sensitive'] : null;
        $this->container['anchor_horizontal_alignment'] = isset($data['anchor_horizontal_alignment']) ? $data['anchor_horizontal_alignment'] : null;
        $this->container['anchor_ignore_if_not_present'] = isset($data['anchor_ignore_if_not_present']) ? $data['anchor_ignore_if_not_present'] : null;
        $this->container['anchor_match_whole_word'] = isset($data['anchor_match_whole_word']) ? $data['anchor_match_whole_word'] : null;
        $this->container['anchor_string'] = isset($data['anchor_string']) ? $data['anchor_string'] : null;
        $this->container['anchor_units'] = isset($data['anchor_units']) ? $data['anchor_units'] : null;
        $this->container['anchor_x_offset'] = isset($data['anchor_x_offset']) ? $data['anchor_x_offset'] : null;
        $this->container['anchor_y_offset'] = isset($data['anchor_y_offset']) ? $data['anchor_y_offset'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['button_text'] = isset($data['button_text']) ? $data['button_text'] : null;
        $this->container['conditional_parent_label'] = isset($data['conditional_parent_label']) ? $data['conditional_parent_label'] : null;
        $this->container['conditional_parent_value'] = isset($data['conditional_parent_value']) ? $data['conditional_parent_value'] : null;
        $this->container['custom_tab_id'] = isset($data['custom_tab_id']) ? $data['custom_tab_id'] : null;
        $this->container['decline_reason'] = isset($data['decline_reason']) ? $data['decline_reason'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['merge_field'] = isset($data['merge_field']) ? $data['merge_field'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tab_group_labels'] = isset($data['tab_group_labels']) ? $data['tab_group_labels'] : null;
        $this->container['tab_id'] = isset($data['tab_id']) ? $data['tab_id'] : null;
        $this->container['tab_label'] = isset($data['tab_label']) ? $data['tab_label'] : null;
        $this->container['tab_order'] = isset($data['tab_order']) ? $data['tab_order'] : null;
        $this->container['template_locked'] = isset($data['template_locked']) ? $data['template_locked'] : null;
        $this->container['template_required'] = isset($data['template_required']) ? $data['template_required'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['x_position'] = isset($data['x_position']) ? $data['x_position'] : null;
        $this->container['y_position'] = isset($data['y_position']) ? $data['y_position'] : null;
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
     * Gets anchor_case_sensitive
     *
     * @return string
     */
    public function getAnchorCaseSensitive()
    {
        return $this->container['anchor_case_sensitive'];
    }

    /**
     * Sets anchor_case_sensitive
     *
     * @param string $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     *
     * @return $this
     */
    public function setAnchorCaseSensitive($anchor_case_sensitive)
    {
        $this->container['anchor_case_sensitive'] = $anchor_case_sensitive;

        return $this;
    }

    /**
     * Gets anchor_horizontal_alignment
     *
     * @return string
     */
    public function getAnchorHorizontalAlignment()
    {
        return $this->container['anchor_horizontal_alignment'];
    }

    /**
     * Sets anchor_horizontal_alignment
     *
     * @param string $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     *
     * @return $this
     */
    public function setAnchorHorizontalAlignment($anchor_horizontal_alignment)
    {
        $this->container['anchor_horizontal_alignment'] = $anchor_horizontal_alignment;

        return $this;
    }

    /**
     * Gets anchor_ignore_if_not_present
     *
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent()
    {
        return $this->container['anchor_ignore_if_not_present'];
    }

    /**
     * Sets anchor_ignore_if_not_present
     *
     * @param string $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
     *
     * @return $this
     */
    public function setAnchorIgnoreIfNotPresent($anchor_ignore_if_not_present)
    {
        $this->container['anchor_ignore_if_not_present'] = $anchor_ignore_if_not_present;

        return $this;
    }

    /**
     * Gets anchor_match_whole_word
     *
     * @return string
     */
    public function getAnchorMatchWholeWord()
    {
        return $this->container['anchor_match_whole_word'];
    }

    /**
     * Sets anchor_match_whole_word
     *
     * @param string $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     *
     * @return $this
     */
    public function setAnchorMatchWholeWord($anchor_match_whole_word)
    {
        $this->container['anchor_match_whole_word'] = $anchor_match_whole_word;

        return $this;
    }

    /**
     * Gets anchor_string
     *
     * @return string
     */
    public function getAnchorString()
    {
        return $this->container['anchor_string'];
    }

    /**
     * Sets anchor_string
     *
     * @param string $anchor_string Anchor text information for a radio button.
     *
     * @return $this
     */
    public function setAnchorString($anchor_string)
    {
        $this->container['anchor_string'] = $anchor_string;

        return $this;
    }

    /**
     * Gets anchor_units
     *
     * @return string
     */
    public function getAnchorUnits()
    {
        return $this->container['anchor_units'];
    }

    /**
     * Sets anchor_units
     *
     * @param string $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     *
     * @return $this
     */
    public function setAnchorUnits($anchor_units)
    {
        $this->container['anchor_units'] = $anchor_units;

        return $this;
    }

    /**
     * Gets anchor_x_offset
     *
     * @return string
     */
    public function getAnchorXOffset()
    {
        return $this->container['anchor_x_offset'];
    }

    /**
     * Sets anchor_x_offset
     *
     * @param string $anchor_x_offset Specifies the X axis location of the tab, in anchorUnits, relative to the anchorString.
     *
     * @return $this
     */
    public function setAnchorXOffset($anchor_x_offset)
    {
        $this->container['anchor_x_offset'] = $anchor_x_offset;

        return $this;
    }

    /**
     * Gets anchor_y_offset
     *
     * @return string
     */
    public function getAnchorYOffset()
    {
        return $this->container['anchor_y_offset'];
    }

    /**
     * Sets anchor_y_offset
     *
     * @param string $anchor_y_offset Specifies the Y axis location of the tab, in anchorUnits, relative to the anchorString.
     *
     * @return $this
     */
    public function setAnchorYOffset($anchor_y_offset)
    {
        $this->container['anchor_y_offset'] = $anchor_y_offset;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return string
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param string $bold When set to **true**, the information in the tab is bold.
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets button_text
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->container['button_text'];
    }

    /**
     * Sets button_text
     *
     * @param string $button_text Specifies the decline text displayed in the tab.
     *
     * @return $this
     */
    public function setButtonText($button_text)
    {
        $this->container['button_text'] = $button_text;

        return $this;
    }

    /**
     * Gets conditional_parent_label
     *
     * @return string
     */
    public function getConditionalParentLabel()
    {
        return $this->container['conditional_parent_label'];
    }

    /**
     * Sets conditional_parent_label
     *
     * @param string $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @return $this
     */
    public function setConditionalParentLabel($conditional_parent_label)
    {
        $this->container['conditional_parent_label'] = $conditional_parent_label;

        return $this;
    }

    /**
     * Gets conditional_parent_value
     *
     * @return string
     */
    public function getConditionalParentValue()
    {
        return $this->container['conditional_parent_value'];
    }

    /**
     * Sets conditional_parent_value
     *
     * @param string $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.  If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
     *
     * @return $this
     */
    public function setConditionalParentValue($conditional_parent_value)
    {
        $this->container['conditional_parent_value'] = $conditional_parent_value;

        return $this;
    }

    /**
     * Gets custom_tab_id
     *
     * @return string
     */
    public function getCustomTabId()
    {
        return $this->container['custom_tab_id'];
    }

    /**
     * Sets custom_tab_id
     *
     * @param string $custom_tab_id The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     *
     * @return $this
     */
    public function setCustomTabId($custom_tab_id)
    {
        $this->container['custom_tab_id'] = $custom_tab_id;

        return $this;
    }

    /**
     * Gets decline_reason
     *
     * @return string
     */
    public function getDeclineReason()
    {
        return $this->container['decline_reason'];
    }

    /**
     * Sets decline_reason
     *
     * @param string $decline_reason The reason the recipient declined the document.
     *
     * @return $this
     */
    public function setDeclineReason($decline_reason)
    {
        $this->container['decline_reason'] = $decline_reason;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets font
     *
     * @return string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param string $font The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param string $font_color The font color used for the information in the tab.  Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param string $font_size The font size used for the information in the tab.  Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the tab in pixels.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets italic
     *
     * @return string
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /**
     * Sets italic
     *
     * @param string $italic When set to **true**, the information in the tab is italic.
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /**
     * Gets merge_field
     *
     * @return \DocuSign\eSign\Model\MergeField
     */
    public function getMergeField()
    {
        return $this->container['merge_field'];
    }

    /**
     * Sets merge_field
     *
     * @param \DocuSign\eSign\Model\MergeField $merge_field merge_field
     *
     * @return $this
     */
    public function setMergeField($merge_field)
    {
        $this->container['merge_field'] = $merge_field;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return string
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param string $page_number Specifies the page number on which the tab is located.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tab_group_labels
     *
     * @return string[]
     */
    public function getTabGroupLabels()
    {
        return $this->container['tab_group_labels'];
    }

    /**
     * Sets tab_group_labels
     *
     * @param string[] $tab_group_labels 
     *
     * @return $this
     */
    public function setTabGroupLabels($tab_group_labels)
    {
        $this->container['tab_group_labels'] = $tab_group_labels;

        return $this;
    }

    /**
     * Gets tab_id
     *
     * @return string
     */
    public function getTabId()
    {
        return $this->container['tab_id'];
    }

    /**
     * Sets tab_id
     *
     * @param string $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @return $this
     */
    public function setTabId($tab_id)
    {
        $this->container['tab_id'] = $tab_id;

        return $this;
    }

    /**
     * Gets tab_label
     *
     * @return string
     */
    public function getTabLabel()
    {
        return $this->container['tab_label'];
    }

    /**
     * Sets tab_label
     *
     * @param string $tab_label The label string associated with the tab.
     *
     * @return $this
     */
    public function setTabLabel($tab_label)
    {
        $this->container['tab_label'] = $tab_label;

        return $this;
    }

    /**
     * Gets tab_order
     *
     * @return string
     */
    public function getTabOrder()
    {
        return $this->container['tab_order'];
    }

    /**
     * Sets tab_order
     *
     * @param string $tab_order 
     *
     * @return $this
     */
    public function setTabOrder($tab_order)
    {
        $this->container['tab_order'] = $tab_order;

        return $this;
    }

    /**
     * Gets template_locked
     *
     * @return string
     */
    public function getTemplateLocked()
    {
        return $this->container['template_locked'];
    }

    /**
     * Sets template_locked
     *
     * @param string $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        $this->container['template_locked'] = $template_locked;

        return $this;
    }

    /**
     * Gets template_required
     *
     * @return string
     */
    public function getTemplateRequired()
    {
        return $this->container['template_required'];
    }

    /**
     * Sets template_required
     *
     * @param string $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        $this->container['template_required'] = $template_required;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param string $tooltip 
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets underline
     *
     * @return string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     *
     * @param string $underline When set to **true**, the information in the tab is underlined.
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the tab in pixels.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets x_position
     *
     * @return string
     */
    public function getXPosition()
    {
        return $this->container['x_position'];
    }

    /**
     * Sets x_position
     *
     * @param string $x_position This indicates the horizontal offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @return $this
     */
    public function setXPosition($x_position)
    {
        $this->container['x_position'] = $x_position;

        return $this;
    }

    /**
     * Gets y_position
     *
     * @return string
     */
    public function getYPosition()
    {
        return $this->container['y_position'];
    }

    /**
     * Sets y_position
     *
     * @param string $y_position This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @return $this
     */
    public function setYPosition($y_position)
    {
        $this->container['y_position'] = $y_position;

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

