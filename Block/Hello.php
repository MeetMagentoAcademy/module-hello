<?php

namespace MMAcademy\Hello\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    protected $_template = 'MMAcademy_Hello::hello.phtml';

    public function getHelloText()
    {
        $name = $this->getRequest()->getParam('name');
        if (empty($name)) {
            return __('Hello World!');
        } else {
            return __('Hello %1!', $name);
        }
    }

    public function getFormUrl()
    {
        return $this->getUrl('hello/index/index');
    }
}