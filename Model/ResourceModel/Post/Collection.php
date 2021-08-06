<?php
namespace Perspective\CrudM\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perspective\CrudM\Model\Post',
            'Perspective\CrudM\Model\ResourceModel\Post');
    }
}