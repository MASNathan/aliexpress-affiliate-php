<?php

namespace MASNathan\AliExpress\Request;

class GetPromotionProductDetailRequest extends Request
{
    public function setFields($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $this->setArgument('fields', $value);

        return $this;
    }

    public function setProductId($value)
    {
        $this->setArgument('productId', $value);

        return $this;
    }

    public function setLocalCurrency($value)
    {
        $this->setArgument('localCurrency', $value);

        return $this;
    }

    public function setLanguage($value)
    {
        $this->setArgument('language', $value);

        return $this;
    }
}
