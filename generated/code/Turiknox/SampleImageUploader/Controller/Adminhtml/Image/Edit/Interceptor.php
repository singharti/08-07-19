<?php
namespace Turiknox\SampleImageUploader\Controller\Adminhtml\Image\Edit;

/**
 * Interceptor class for @see \Turiknox\SampleImageUploader\Controller\Adminhtml\Image\Edit
 */
class Interceptor extends \Turiknox\SampleImageUploader\Controller\Adminhtml\Image\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Registry $registry, \Turiknox\SampleImageUploader\Api\ImageRepositoryInterface $imageRepository, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($registry, $imageRepository, $resultPageFactory, $dateFilter, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
