<?php

namespace MASNathan\AliExpress\Request;

class GetPromotionLinksRequest extends Request
{
    public function setFields($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $this->setArgument('fields', $value);

        return $this;
    }

    public function setTrackingId($value)
    {
        $this->setArgument('trackingId', $value);

        return $this;
    }

    public function setUrls($value)
    {
        $this->setArgument('urls', $value);

        return $this;
    }
}