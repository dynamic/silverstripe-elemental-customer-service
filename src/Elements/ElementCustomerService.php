<?php

namespace Dynamic\Elements\CustomerService\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\FieldType\DBField;

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
    private static $icon = 'font-icon-info-circled';

    /**
     * @var string
     */
    private static $table_name = 'ElementCustomerService';

    /**
     * @var array
     */
    private static $db = [
        'LocationName' => 'Varchar(255)',
        'Website' => 'Varchar(255)',
        'Phone' => 'Varchar(40)',
        'Email' => 'Varchar(255)',
        'Fax' => 'Varchar(45)',
    ];

    /**
     * @param bool $includerelations
     * @return array
     */
    public function fieldLabels($includerelations = true)
    {
        $labels = parent::fieldLabels($includerelations);

        $labels['LocationName'] = _t(__CLASS__.'.LocationNameLabel', 'Location Name');
        $labels['Website'] = _t(__CLASS__ . '.WebsiteLabel', 'Website');
        $labels['Phone'] = _t(__CLASS__ . '.PhoneLabel', 'Phone');
        $labels['Email'] = _t(__CLASS__ . '.EmailLabel', 'Email');
        $labels['Fax'] = _t(__CLASS__ . '.FaxLabel', 'Fax');

        return $labels;
    }

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            if ($website = $fields->dataFieldByName('Website')) {
                $website->setAttribute('placeholder', 'http://');
            }
            $fields->replaceField(
                'Email',
                EmailField::create('Email')
                    ->setTitle($this->fieldLabel('Email'))
            );
        });

        return parent::getCMSFields();
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
        return DBField::create_field('HTMLText', $this->getFullAddress())->Summary(20);
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__.'.BlockType', 'Customer Service');
    }
}
