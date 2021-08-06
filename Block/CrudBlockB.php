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
        // companymodule is given in routes.xml
        // controller_name is folder name inside controller folder
        // action is php file name inside above controller_name folder

        return '/crudm/index/create';
        // here controller_name is index, action is booking
    }
}