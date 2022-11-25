<?php

namespace Cognixia\Blog3\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Cognixia\Blog3\Model\Blog','Cognixia\Blog3\Model\ResourceModel\Blog');
    }
}
