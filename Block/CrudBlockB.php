<?php
namespace Perspective\CrudM\Block;
class CrudBlockB extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Perspective\CrudM\Model\PostFactory $postFactory
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
    }
    public function getResult()
    {
        $post = $this->postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
    public function getFormAction()
    {
        return '/crudm/index/create';
    }
}