<?php

namespace Perspective\CrudM\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $postFactory;

    public function __construct
    (\Perspective\CrudM\Model\PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup,
                            ModuleContextInterface   $context)
    {
        if (version_compare($context->getVersion(), '1.1.0', '<')) {

            $data = [
                'name' => "Post3",
                'post_content' => "TestPost3",
                'url_key' => '/magento-2-module-development/magento-2-post3.html',
                'tags' => 'magento 2,perspectivecrudm',
                'status' => 1
            ];
            $post = $this->postFactory->create();
            $post->addData($data)->save();

        }
    }
}