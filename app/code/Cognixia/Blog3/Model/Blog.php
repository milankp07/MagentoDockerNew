<?php

namespace Cognixia\Blog3\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    public function _construct()
    {
        $this->_init('Cognixia\Blog3\Model\ResourceModel\Blog');
    }
}
