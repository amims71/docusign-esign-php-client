<?php
/**
 * TemplateTabs
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
 * TemplateTabs Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TemplateTabs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'templateTabs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approve_tabs' => '\DocuSign\eSign\Model\Approve[]',
        'checkbox_tabs' => '\DocuSign\eSign\Model\Checkbox[]',
        'company_tabs' => '\DocuSign\eSign\Model\Company[]',
        'date_signed_tabs' => '\DocuSign\eSign\Model\DateSigned[]',
        'date_tabs' => '\DocuSign\eSign\Model\\Date[]',
        'decline_tabs' => '\DocuSign\eSign\Model\Decline[]',
        'email_address_tabs' => '\DocuSign\eSign\Model\EmailAddress[]',
        'email_tabs' => '\DocuSign\eSign\Model\Email[]',
        'envelope_id_tabs' => '\DocuSign\eSign\Model\EnvelopeId[]',
        'first_name_tabs' => '\DocuSign\eSign\Model\FirstName[]',
        'formula_tabs' => '\DocuSign\eSign\Model\FormulaTab[]',
        'full_name_tabs' => '\DocuSign\eSign\Model\FullName[]',
        'initial_here_tabs' => '\DocuSign\eSign\Model\InitialHere[]',
        'last_name_tabs' => '\DocuSign\eSign\Model\LastName[]',
        'list_tabs' => '\DocuSign\eSign\Model\array[]',
        'notarize_tabs' => '\DocuSign\eSign\Model\Notarize[]',
        'note_tabs' => '\DocuSign\eSign\Model\Note[]',
        'number_tabs' => '\DocuSign\eSign\Model\Number[]',
        'radio_group_tabs' => '\DocuSign\eSign\Model\RadioGroup[]',
        'signer_attachment_tabs' => '\DocuSign\eSign\Model\SignerAttachment[]',
        'sign_here_tabs' => '\DocuSign\eSign\Model\SignHere[]',
        'smart_section_tabs' => '\DocuSign\eSign\Model\SmartSection[]',
        'ssn_tabs' => '\DocuSign\eSign\Model\Ssn[]',
        'text_tabs' => '\DocuSign\eSign\Model\Text[]',
        'title_tabs' => '\DocuSign\eSign\Model\Title[]',
        'view_tabs' => '\DocuSign\eSign\Model\View[]',
        'zip_tabs' => '\DocuSign\eSign\Model\Zip[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approve_tabs' => null,
        'checkbox_tabs' => null,
        'company_tabs' => null,
        'date_signed_tabs' => null,
        'date_tabs' => null,
        'decline_tabs' => null,
        'email_address_tabs' => null,
        'email_tabs' => null,
        'envelope_id_tabs' => null,
        'first_name_tabs' => null,
        'formula_tabs' => null,
        'full_name_tabs' => null,
        'initial_here_tabs' => null,
        'last_name_tabs' => null,
        'list_tabs' => null,
        'notarize_tabs' => null,
        'note_tabs' => null,
        'number_tabs' => null,
        'radio_group_tabs' => null,
        'signer_attachment_tabs' => null,
        'sign_here_tabs' => null,
        'smart_section_tabs' => null,
        'ssn_tabs' => null,
        'text_tabs' => null,
        'title_tabs' => null,
        'view_tabs' => null,
        'zip_tabs' => null
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
        'approve_tabs' => 'approveTabs',
        'checkbox_tabs' => 'checkboxTabs',
        'company_tabs' => 'companyTabs',
        'date_signed_tabs' => 'dateSignedTabs',
        'date_tabs' => 'dateTabs',
        'decline_tabs' => 'declineTabs',
        'email_address_tabs' => 'emailAddressTabs',
        'email_tabs' => 'emailTabs',
        'envelope_id_tabs' => 'envelopeIdTabs',
        'first_name_tabs' => 'firstNameTabs',
        'formula_tabs' => 'formulaTabs',
        'full_name_tabs' => 'fullNameTabs',
        'initial_here_tabs' => 'initialHereTabs',
        'last_name_tabs' => 'lastNameTabs',
        'list_tabs' => 'listTabs',
        'notarize_tabs' => 'notarizeTabs',
        'note_tabs' => 'noteTabs',
        'number_tabs' => 'numberTabs',
        'radio_group_tabs' => 'radioGroupTabs',
        'signer_attachment_tabs' => 'signerAttachmentTabs',
        'sign_here_tabs' => 'signHereTabs',
        'smart_section_tabs' => 'smartSectionTabs',
        'ssn_tabs' => 'ssnTabs',
        'text_tabs' => 'textTabs',
        'title_tabs' => 'titleTabs',
        'view_tabs' => 'viewTabs',
        'zip_tabs' => 'zipTabs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approve_tabs' => 'setApproveTabs',
        'checkbox_tabs' => 'setCheckboxTabs',
        'company_tabs' => 'setCompanyTabs',
        'date_signed_tabs' => 'setDateSignedTabs',
        'date_tabs' => 'setDateTabs',
        'decline_tabs' => 'setDeclineTabs',
        'email_address_tabs' => 'setEmailAddressTabs',
        'email_tabs' => 'setEmailTabs',
        'envelope_id_tabs' => 'setEnvelopeIdTabs',
        'first_name_tabs' => 'setFirstNameTabs',
        'formula_tabs' => 'setFormulaTabs',
        'full_name_tabs' => 'setFullNameTabs',
        'initial_here_tabs' => 'setInitialHereTabs',
        'last_name_tabs' => 'setLastNameTabs',
        'list_tabs' => 'setListTabs',
        'notarize_tabs' => 'setNotarizeTabs',
        'note_tabs' => 'setNoteTabs',
        'number_tabs' => 'setNumberTabs',
        'radio_group_tabs' => 'setRadioGroupTabs',
        'signer_attachment_tabs' => 'setSignerAttachmentTabs',
        'sign_here_tabs' => 'setSignHereTabs',
        'smart_section_tabs' => 'setSmartSectionTabs',
        'ssn_tabs' => 'setSsnTabs',
        'text_tabs' => 'setTextTabs',
        'title_tabs' => 'setTitleTabs',
        'view_tabs' => 'setViewTabs',
        'zip_tabs' => 'setZipTabs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approve_tabs' => 'getApproveTabs',
        'checkbox_tabs' => 'getCheckboxTabs',
        'company_tabs' => 'getCompanyTabs',
        'date_signed_tabs' => 'getDateSignedTabs',
        'date_tabs' => 'getDateTabs',
        'decline_tabs' => 'getDeclineTabs',
        'email_address_tabs' => 'getEmailAddressTabs',
        'email_tabs' => 'getEmailTabs',
        'envelope_id_tabs' => 'getEnvelopeIdTabs',
        'first_name_tabs' => 'getFirstNameTabs',
        'formula_tabs' => 'getFormulaTabs',
        'full_name_tabs' => 'getFullNameTabs',
        'initial_here_tabs' => 'getInitialHereTabs',
        'last_name_tabs' => 'getLastNameTabs',
        'list_tabs' => 'getListTabs',
        'notarize_tabs' => 'getNotarizeTabs',
        'note_tabs' => 'getNoteTabs',
        'number_tabs' => 'getNumberTabs',
        'radio_group_tabs' => 'getRadioGroupTabs',
        'signer_attachment_tabs' => 'getSignerAttachmentTabs',
        'sign_here_tabs' => 'getSignHereTabs',
        'smart_section_tabs' => 'getSmartSectionTabs',
        'ssn_tabs' => 'getSsnTabs',
        'text_tabs' => 'getTextTabs',
        'title_tabs' => 'getTitleTabs',
        'view_tabs' => 'getViewTabs',
        'zip_tabs' => 'getZipTabs'
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
        $this->container['approve_tabs'] = isset($data['approve_tabs']) ? $data['approve_tabs'] : null;
        $this->container['checkbox_tabs'] = isset($data['checkbox_tabs']) ? $data['checkbox_tabs'] : null;
        $this->container['company_tabs'] = isset($data['company_tabs']) ? $data['company_tabs'] : null;
        $this->container['date_signed_tabs'] = isset($data['date_signed_tabs']) ? $data['date_signed_tabs'] : null;
        $this->container['date_tabs'] = isset($data['date_tabs']) ? $data['date_tabs'] : null;
        $this->container['decline_tabs'] = isset($data['decline_tabs']) ? $data['decline_tabs'] : null;
        $this->container['email_address_tabs'] = isset($data['email_address_tabs']) ? $data['email_address_tabs'] : null;
        $this->container['email_tabs'] = isset($data['email_tabs']) ? $data['email_tabs'] : null;
        $this->container['envelope_id_tabs'] = isset($data['envelope_id_tabs']) ? $data['envelope_id_tabs'] : null;
        $this->container['first_name_tabs'] = isset($data['first_name_tabs']) ? $data['first_name_tabs'] : null;
        $this->container['formula_tabs'] = isset($data['formula_tabs']) ? $data['formula_tabs'] : null;
        $this->container['full_name_tabs'] = isset($data['full_name_tabs']) ? $data['full_name_tabs'] : null;
        $this->container['initial_here_tabs'] = isset($data['initial_here_tabs']) ? $data['initial_here_tabs'] : null;
        $this->container['last_name_tabs'] = isset($data['last_name_tabs']) ? $data['last_name_tabs'] : null;
        $this->container['list_tabs'] = isset($data['list_tabs']) ? $data['list_tabs'] : null;
        $this->container['notarize_tabs'] = isset($data['notarize_tabs']) ? $data['notarize_tabs'] : null;
        $this->container['note_tabs'] = isset($data['note_tabs']) ? $data['note_tabs'] : null;
        $this->container['number_tabs'] = isset($data['number_tabs']) ? $data['number_tabs'] : null;
        $this->container['radio_group_tabs'] = isset($data['radio_group_tabs']) ? $data['radio_group_tabs'] : null;
        $this->container['signer_attachment_tabs'] = isset($data['signer_attachment_tabs']) ? $data['signer_attachment_tabs'] : null;
        $this->container['sign_here_tabs'] = isset($data['sign_here_tabs']) ? $data['sign_here_tabs'] : null;
        $this->container['smart_section_tabs'] = isset($data['smart_section_tabs']) ? $data['smart_section_tabs'] : null;
        $this->container['ssn_tabs'] = isset($data['ssn_tabs']) ? $data['ssn_tabs'] : null;
        $this->container['text_tabs'] = isset($data['text_tabs']) ? $data['text_tabs'] : null;
        $this->container['title_tabs'] = isset($data['title_tabs']) ? $data['title_tabs'] : null;
        $this->container['view_tabs'] = isset($data['view_tabs']) ? $data['view_tabs'] : null;
        $this->container['zip_tabs'] = isset($data['zip_tabs']) ? $data['zip_tabs'] : null;
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
     * Gets approve_tabs
     *
     * @return \DocuSign\eSign\Model\Approve[]
     */
    public function getApproveTabs()
    {
        return $this->container['approve_tabs'];
    }

    /**
     * Sets approve_tabs
     *
     * @param \DocuSign\eSign\Model\Approve[] $approve_tabs Specifies a tag on the document where you want the recipient to approve documents in an envelope without placing a signature or initials on the document. If the recipient clicks the Approve tag during the signing process, the recipient is considered to have signed the document. No information is shown on the document for the approval, but it is recorded as a signature in the envelope history.
     *
     * @return $this
     */
    public function setApproveTabs($approve_tabs)
    {
        $this->container['approve_tabs'] = $approve_tabs;

        return $this;
    }

    /**
     * Gets checkbox_tabs
     *
     * @return \DocuSign\eSign\Model\Checkbox[]
     */
    public function getCheckboxTabs()
    {
        return $this->container['checkbox_tabs'];
    }

    /**
     * Sets checkbox_tabs
     *
     * @param \DocuSign\eSign\Model\Checkbox[] $checkbox_tabs Specifies a tag on the document in a location where the recipient can select an option.
     *
     * @return $this
     */
    public function setCheckboxTabs($checkbox_tabs)
    {
        $this->container['checkbox_tabs'] = $checkbox_tabs;

        return $this;
    }

    /**
     * Gets company_tabs
     *
     * @return \DocuSign\eSign\Model\Company[]
     */
    public function getCompanyTabs()
    {
        return $this->container['company_tabs'];
    }

    /**
     * Sets company_tabs
     *
     * @param \DocuSign\eSign\Model\Company[] $company_tabs Specifies a tag on the document where you want the recipient's company name to appear.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setCompanyTabs($company_tabs)
    {
        $this->container['company_tabs'] = $company_tabs;

        return $this;
    }

    /**
     * Gets date_signed_tabs
     *
     * @return \DocuSign\eSign\Model\DateSigned[]
     */
    public function getDateSignedTabs()
    {
        return $this->container['date_signed_tabs'];
    }

    /**
     * Sets date_signed_tabs
     *
     * @param \DocuSign\eSign\Model\DateSigned[] $date_signed_tabs Specifies a tab on the document where the date the document was signed will automatically appear.
     *
     * @return $this
     */
    public function setDateSignedTabs($date_signed_tabs)
    {
        $this->container['date_signed_tabs'] = $date_signed_tabs;

        return $this;
    }

    /**
     * Gets date_tabs
     *
     * @return \DocuSign\eSign\Model\\DateTime[]
     */
    public function getDateTabs()
    {
        return $this->container['date_tabs'];
    }

    /**
     * Sets date_tabs
     *
     * @param \DocuSign\eSign\Model\\DateTime[] $date_tabs Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained.   If you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
     *
     * @return $this
     */
    public function setDateTabs($date_tabs)
    {
        $this->container['date_tabs'] = $date_tabs;

        return $this;
    }

    /**
     * Gets decline_tabs
     *
     * @return \DocuSign\eSign\Model\Decline[]
     */
    public function getDeclineTabs()
    {
        return $this->container['decline_tabs'];
    }

    /**
     * Sets decline_tabs
     *
     * @param \DocuSign\eSign\Model\Decline[] $decline_tabs Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
     *
     * @return $this
     */
    public function setDeclineTabs($decline_tabs)
    {
        $this->container['decline_tabs'] = $decline_tabs;

        return $this;
    }

    /**
     * Gets email_address_tabs
     *
     * @return \DocuSign\eSign\Model\EmailAddress[]
     */
    public function getEmailAddressTabs()
    {
        return $this->container['email_address_tabs'];
    }

    /**
     * Sets email_address_tabs
     *
     * @param \DocuSign\eSign\Model\EmailAddress[] $email_address_tabs Specifies a location on the document where you want where you want the recipient's email, as entered in the recipient information, to display.
     *
     * @return $this
     */
    public function setEmailAddressTabs($email_address_tabs)
    {
        $this->container['email_address_tabs'] = $email_address_tabs;

        return $this;
    }

    /**
     * Gets email_tabs
     *
     * @return \DocuSign\eSign\Model\Email[]
     */
    public function getEmailTabs()
    {
        return $this->container['email_tabs'];
    }

    /**
     * Sets email_tabs
     *
     * @param \DocuSign\eSign\Model\Email[] $email_tabs Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setEmailTabs($email_tabs)
    {
        $this->container['email_tabs'] = $email_tabs;

        return $this;
    }

    /**
     * Gets envelope_id_tabs
     *
     * @return \DocuSign\eSign\Model\EnvelopeId[]
     */
    public function getEnvelopeIdTabs()
    {
        return $this->container['envelope_id_tabs'];
    }

    /**
     * Sets envelope_id_tabs
     *
     * @param \DocuSign\eSign\Model\EnvelopeId[] $envelope_id_tabs Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
     *
     * @return $this
     */
    public function setEnvelopeIdTabs($envelope_id_tabs)
    {
        $this->container['envelope_id_tabs'] = $envelope_id_tabs;

        return $this;
    }

    /**
     * Gets first_name_tabs
     *
     * @return \DocuSign\eSign\Model\FirstName[]
     */
    public function getFirstNameTabs()
    {
        return $this->container['first_name_tabs'];
    }

    /**
     * Sets first_name_tabs
     *
     * @param \DocuSign\eSign\Model\FirstName[] $first_name_tabs Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
     *
     * @return $this
     */
    public function setFirstNameTabs($first_name_tabs)
    {
        $this->container['first_name_tabs'] = $first_name_tabs;

        return $this;
    }

    /**
     * Gets formula_tabs
     *
     * @return \DocuSign\eSign\Model\FormulaTab[]
     */
    public function getFormulaTabs()
    {
        return $this->container['formula_tabs'];
    }

    /**
     * Sets formula_tabs
     *
     * @param \DocuSign\eSign\Model\FormulaTab[] $formula_tabs Specifies a tag that is used to add a calculated field to a document. Envelope recipients cannot directly enter information into the tag; the formula tab calculates and displays a new value when changes are made to the reference tag values. The reference tag information and calculation operations are entered in the \"formula\" element. See the [ML:Using the Calculated Fields Feature] quick start guide or [ML:DocuSign Service User Guide] for more information about formulas.
     *
     * @return $this
     */
    public function setFormulaTabs($formula_tabs)
    {
        $this->container['formula_tabs'] = $formula_tabs;

        return $this;
    }

    /**
     * Gets full_name_tabs
     *
     * @return \DocuSign\eSign\Model\FullName[]
     */
    public function getFullNameTabs()
    {
        return $this->container['full_name_tabs'];
    }

    /**
     * Sets full_name_tabs
     *
     * @param \DocuSign\eSign\Model\FullName[] $full_name_tabs Specifies a tag on the document where you want the recipient's name to appear.
     *
     * @return $this
     */
    public function setFullNameTabs($full_name_tabs)
    {
        $this->container['full_name_tabs'] = $full_name_tabs;

        return $this;
    }

    /**
     * Gets initial_here_tabs
     *
     * @return \DocuSign\eSign\Model\InitialHere[]
     */
    public function getInitialHereTabs()
    {
        return $this->container['initial_here_tabs'];
    }

    /**
     * Sets initial_here_tabs
     *
     * @param \DocuSign\eSign\Model\InitialHere[] $initial_here_tabs Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
     *
     * @return $this
     */
    public function setInitialHereTabs($initial_here_tabs)
    {
        $this->container['initial_here_tabs'] = $initial_here_tabs;

        return $this;
    }

    /**
     * Gets last_name_tabs
     *
     * @return \DocuSign\eSign\Model\LastName[]
     */
    public function getLastNameTabs()
    {
        return $this->container['last_name_tabs'];
    }

    /**
     * Sets last_name_tabs
     *
     * @param \DocuSign\eSign\Model\LastName[] $last_name_tabs Specifies a tag on a document where you want the recipient's last name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
     *
     * @return $this
     */
    public function setLastNameTabs($last_name_tabs)
    {
        $this->container['last_name_tabs'] = $last_name_tabs;

        return $this;
    }

    /**
     * Gets list_tabs
     *
     * @return \DocuSign\eSign\Model\array[]
     */
    public function getListTabs()
    {
        return $this->container['list_tabs'];
    }

    /**
     * Sets list_tabs
     *
     * @param \DocuSign\eSign\Model\array[] $list_tabs Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
     *
     * @return $this
     */
    public function setListTabs($list_tabs)
    {
        $this->container['list_tabs'] = $list_tabs;

        return $this;
    }

    /**
     * Gets notarize_tabs
     *
     * @return \DocuSign\eSign\Model\Notarize[]
     */
    public function getNotarizeTabs()
    {
        return $this->container['notarize_tabs'];
    }

    /**
     * Sets notarize_tabs
     *
     * @param \DocuSign\eSign\Model\Notarize[] $notarize_tabs 
     *
     * @return $this
     */
    public function setNotarizeTabs($notarize_tabs)
    {
        $this->container['notarize_tabs'] = $notarize_tabs;

        return $this;
    }

    /**
     * Gets note_tabs
     *
     * @return \DocuSign\eSign\Model\Note[]
     */
    public function getNoteTabs()
    {
        return $this->container['note_tabs'];
    }

    /**
     * Sets note_tabs
     *
     * @param \DocuSign\eSign\Model\Note[] $note_tabs Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
     *
     * @return $this
     */
    public function setNoteTabs($note_tabs)
    {
        $this->container['note_tabs'] = $note_tabs;

        return $this;
    }

    /**
     * Gets number_tabs
     *
     * @return \DocuSign\eSign\Model\Number[]
     */
    public function getNumberTabs()
    {
        return $this->container['number_tabs'];
    }

    /**
     * Sets number_tabs
     *
     * @param \DocuSign\eSign\Model\Number[] $number_tabs Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setNumberTabs($number_tabs)
    {
        $this->container['number_tabs'] = $number_tabs;

        return $this;
    }

    /**
     * Gets radio_group_tabs
     *
     * @return \DocuSign\eSign\Model\RadioGroup[]
     */
    public function getRadioGroupTabs()
    {
        return $this->container['radio_group_tabs'];
    }

    /**
     * Sets radio_group_tabs
     *
     * @param \DocuSign\eSign\Model\RadioGroup[] $radio_group_tabs Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
     *
     * @return $this
     */
    public function setRadioGroupTabs($radio_group_tabs)
    {
        $this->container['radio_group_tabs'] = $radio_group_tabs;

        return $this;
    }

    /**
     * Gets signer_attachment_tabs
     *
     * @return \DocuSign\eSign\Model\SignerAttachment[]
     */
    public function getSignerAttachmentTabs()
    {
        return $this->container['signer_attachment_tabs'];
    }

    /**
     * Sets signer_attachment_tabs
     *
     * @param \DocuSign\eSign\Model\SignerAttachment[] $signer_attachment_tabs Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
     *
     * @return $this
     */
    public function setSignerAttachmentTabs($signer_attachment_tabs)
    {
        $this->container['signer_attachment_tabs'] = $signer_attachment_tabs;

        return $this;
    }

    /**
     * Gets sign_here_tabs
     *
     * @return \DocuSign\eSign\Model\SignHere[]
     */
    public function getSignHereTabs()
    {
        return $this->container['sign_here_tabs'];
    }

    /**
     * Sets sign_here_tabs
     *
     * @param \DocuSign\eSign\Model\SignHere[] $sign_here_tabs A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The \"optional\" parameter sets if the signature is required or optional.
     *
     * @return $this
     */
    public function setSignHereTabs($sign_here_tabs)
    {
        $this->container['sign_here_tabs'] = $sign_here_tabs;

        return $this;
    }

    /**
     * Gets smart_section_tabs
     *
     * @return \DocuSign\eSign\Model\SmartSection[]
     */
    public function getSmartSectionTabs()
    {
        return $this->container['smart_section_tabs'];
    }

    /**
     * Sets smart_section_tabs
     *
     * @param \DocuSign\eSign\Model\SmartSection[] $smart_section_tabs 
     *
     * @return $this
     */
    public function setSmartSectionTabs($smart_section_tabs)
    {
        $this->container['smart_section_tabs'] = $smart_section_tabs;

        return $this;
    }

    /**
     * Gets ssn_tabs
     *
     * @return \DocuSign\eSign\Model\Ssn[]
     */
    public function getSsnTabs()
    {
        return $this->container['ssn_tabs'];
    }

    /**
     * Sets ssn_tabs
     *
     * @param \DocuSign\eSign\Model\Ssn[] $ssn_tabs Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setSsnTabs($ssn_tabs)
    {
        $this->container['ssn_tabs'] = $ssn_tabs;

        return $this;
    }

    /**
     * Gets text_tabs
     *
     * @return \DocuSign\eSign\Model\Text[]
     */
    public function getTextTabs()
    {
        return $this->container['text_tabs'];
    }

    /**
     * Sets text_tabs
     *
     * @param \DocuSign\eSign\Model\Text[] $text_tabs Specifies a that that is an adaptable field that allows the recipient to enter different text information.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setTextTabs($text_tabs)
    {
        $this->container['text_tabs'] = $text_tabs;

        return $this;
    }

    /**
     * Gets title_tabs
     *
     * @return \DocuSign\eSign\Model\Title[]
     */
    public function getTitleTabs()
    {
        return $this->container['title_tabs'];
    }

    /**
     * Sets title_tabs
     *
     * @param \DocuSign\eSign\Model\Title[] $title_tabs Specifies a tag on the document where you want the recipient's title to appear.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setTitleTabs($title_tabs)
    {
        $this->container['title_tabs'] = $title_tabs;

        return $this;
    }

    /**
     * Gets view_tabs
     *
     * @return \DocuSign\eSign\Model\View[]
     */
    public function getViewTabs()
    {
        return $this->container['view_tabs'];
    }

    /**
     * Sets view_tabs
     *
     * @param \DocuSign\eSign\Model\View[] $view_tabs 
     *
     * @return $this
     */
    public function setViewTabs($view_tabs)
    {
        $this->container['view_tabs'] = $view_tabs;

        return $this;
    }

    /**
     * Gets zip_tabs
     *
     * @return \DocuSign\eSign\Model\Zip[]
     */
    public function getZipTabs()
    {
        return $this->container['zip_tabs'];
    }

    /**
     * Sets zip_tabs
     *
     * @param \DocuSign\eSign\Model\Zip[] $zip_tabs Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.  When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return $this
     */
    public function setZipTabs($zip_tabs)
    {
        $this->container['zip_tabs'] = $zip_tabs;

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

