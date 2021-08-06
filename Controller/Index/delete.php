<?php
namespace Perspective\CrudM\Controller\Index;
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $postFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Perspective\CrudM\Model\PostFactory $postFactory
    )
    {
        $this->postFactory = $postFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $post = $this->postFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            $post->load($item->getId());
            $post->delete();
        }
        return $this->_redirect('crudm');
    }
}