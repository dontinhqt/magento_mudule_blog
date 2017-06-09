<?php namespace Ashsmith\Blog\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';

    protected function _construct()
    {
        $this->_init('Ashsmith\Blog\Model\Post', 'Ashsmith\Blog\Model\ResourceModel\Post');
    }

}
