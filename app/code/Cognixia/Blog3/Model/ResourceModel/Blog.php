<?php

namespace Cognixia\Blog3\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
    public function _construct()
    {
        $this->_init('blogs','entity_id');
    }
}
