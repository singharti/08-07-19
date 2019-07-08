<?php
namespace Magento\Config\Model\Config\Backend\Image\Logo;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Backend\Image\Logo
 */
class Interceptor extends \Magento\Config\Model\Config\Backend\Image\Logo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Config\Model\Config\Backend\File\RequestData\RequestDataInterface $requestData, \Magento\Framework\Filesystem $filesystem, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $uploaderFactory, $requestData, $filesystem, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
