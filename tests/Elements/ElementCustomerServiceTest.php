<?php

namespace Dynamic\Elements\Tests;

use Dynamic\Elements\CustomerService\Elements\ElementCustomerService;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

/**
 * Class ElementCustomerServiceTest
 * @package Dynamic\Elements\Tests
 */
class ElementCustomerServiceTest extends SapphireTest
{
    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = Injector::inst()->create(ElementCustomerService::class);
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }

    /**
     *
     */
    public function testGetType()
    {
        $object = Injector::inst()->create(ElementCustomerService::class);
        $this->assertEquals($object->getType(), 'Customer Service');
    }
}
