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
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementCustomerService::class, "one");
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }

    /**
     *
     */
    public function testGetType()
    {
        $object = $this->objFromFixture(ElementCustomerService::class, "one");
        $this->assertEquals($object->getType(), 'Customer Service');
    }
}
