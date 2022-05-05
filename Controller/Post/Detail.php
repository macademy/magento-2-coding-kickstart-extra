<?php declare(strict_types=1);

namespace Macademy\BlogExtra\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ) {}

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
