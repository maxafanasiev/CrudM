<?php
namespace Perspective\CrudM\Controller\Index;
class Create extends \Magento\Framework\App\Action\Action
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
        $post = $this->postFactory->create();
        $post->setName($_POST['name']);
        $post->setPost_content($_POST['content']);
        $post->save();
        return $this->_redirect('crudm');
    }
}