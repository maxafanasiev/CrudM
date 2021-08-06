<?php
namespace Perspective\CrudM\Controller\Index;
class listId extends \Magento\Framework\App\Action\Action
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
        $id = '1';
        $post = $this->postFactory->create();
        $post->load($id);
        print_r($post->toArray());
        echo "<a class='action primary' href='http://magento23.loc/crudm/'> Complite</a>";
    }
}