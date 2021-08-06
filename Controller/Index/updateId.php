<?php
namespace Perspective\CrudM\Controller\Index;
class updateId extends \Magento\Framework\App\Action\Action
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
        $id = $_POST['id'];
        $post = $this->postFactory->create();
        $post->load($id);
        $post->setName($_POST['name']);
        $post->setPost_content($_POST['content']);
        $post->save();
        return $this->_redirect('crudm');
    }
}