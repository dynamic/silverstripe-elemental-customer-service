<?php

namespace Dynamic\Elements\CustomerService\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

/**
 * Class LeftAndMainExtension.
 */
class LeftAndMainExtension extends Extension
{
    public function init()
    {
        Requirements::css('dynamic/silverstripe-elemental-customer-service-block: icons/icons.css');
    }
}
