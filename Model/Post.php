<?php
namespace Perspective\CrudM\Model;
class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Perspective\CrudM\Model\ResourceModel\Post');
    }
}