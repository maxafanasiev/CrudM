<?php
namespace Perspective\CrudM\Block;
class CrudBlockUpdate extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Perspective\CrudM\Model\PostFactory $postFactory
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
    }

    public function getFormAction()
    {
        return '/crudm/index/updateid';
    }
}