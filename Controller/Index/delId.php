<?php
namespace Perspective\CrudM\Controller\Index;
class delid extends \Magento\Framework\App\Action\Action
{
    protected $postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Perspective\CrudM\Model\PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $id = $this->_request->getParam('id');
        $post = $this->postFactory->create();
        $post->load($id);
        $post->delete();
        return $this->_redirect('crudm');
    }
}