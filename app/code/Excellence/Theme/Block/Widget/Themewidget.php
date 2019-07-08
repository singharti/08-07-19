<?php
	namespace Excellence\Theme\Block\Widget;

	use Magento\Framework\View\Element\Template;
	use Magento\Widget\Block\BlockInterface;
	
		class Themewidget extends Template implements BlockInterface
		{
		    protected $_template = "widget/themewidget.phtml";
		}
