<?php
namespace Cognixia\HeaderNotice\Plugins;

use Magento\Customer\Model\Registration;

class DisableRegistration
{
    public function afterIsAllowed(Registration $subject, $result)
    {
        return true;
    }
}
