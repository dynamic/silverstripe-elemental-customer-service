<?php

namespace Dynamic\Elements\CustomerService\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;

/**
 * Class ElementCustomerService
 * @package Dynamic\Elements\CustomerService\Elements
 *
 * @property string $Title
 * @property string $Website
 * @property string $Phone
 * @property string $Email
 * @property string $Fax
 */
class ElementCustomerService extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'vendor/dnadesign/silverstripe-elemental/images/base.svg';

    /**
     * @var string
     */
    private static $singular_name = 'Customer Service Element';

    /**
     * @var string
     */
    private static $plural_name = 'Customer Service Elements';

    /**
     * @var string
     */
    private static $table_name = 'ElementCustomerService';

    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar(255)',
        'Website' => 'Varchar(255)',
        'Phone' => 'Varchar(40)',
        'Email' => 'Varchar(255)',
        'Fax' => 'Varchar(45)',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->dataFieldByName('Title')
                ->setTitle('Name');

            if ($website = $fields->dataFieldByName('Website')) {
                $website->setAttribute('placeholder', 'http://');
            }
            $fields->replaceField('Email', EmailField::create('Email'));
        });

        return parent::getCMSFields();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__.'.BlockType', 'Customer Service');
    }
}
