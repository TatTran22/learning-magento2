<?php


namespace blinkk\HelloWorld\Controller\Post;


use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello World!";
    }

    public function test(){
        echo "code o day se khong duoc thuc thi";
    }

}
