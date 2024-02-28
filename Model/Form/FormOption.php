<?php

namespace Dotdigitalgroup\PageBuilder\Model\Form;

use Dotdigitalgroup\PageBuilder\Api\Data\FormOptionInterface;

class FormOption extends \Magento\Framework\Api\AbstractSimpleObject implements FormOptionInterface
{
    /**
     * @inheritDoc
     */
    public function getValue()
    {
        return $this->_get('value');
    }

    /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        return $this->setData('value', $value);
    }

    /**
     * @inheritDoc
     */
    public function getLabel()
    {
        return $this->_get('label');
    }

    /**
     * @inheritDoc
     */
    public function setLabel($label)
    {
        return $this->setData('label', $label);
    }
}
