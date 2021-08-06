<?php
namespace Perspective\CrudM\Model\ResourceModel;
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context
        $context
    ) {
        parent::__construct($context);
    }
    protected function _construct()
    {
        $this->_init('perspective_crudm_post', 'post_id');
    }
}