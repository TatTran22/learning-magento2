<?php


namespace blinkk\HelloWorld\Controller\Post;


use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }

    public function test(){
        echo "code o day se khong duoc thuc thi";
    }

}
