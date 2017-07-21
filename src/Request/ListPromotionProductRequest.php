<?php

namespace MASNathan\AliExpress\Request;

class ListPromotionProductRequest extends Request
{
    public function setFields($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $this->setArgument('fields', $value);

        return $this;
    }

    public function setKeywords($value)
    {
        $this->setArgument('keywords', $value);

        return $this;
    }

    public function setCategoryId($value)
    {
        $this->setArgument('categoryId', $value);

        return $this;
    }

    public function setOriginalPriceFrom($value)
    {
        $this->setArgument('originalPriceFrom', $value);

        return $this;
    }

    public function setOriginalPriceTo($value)
    {
        $this->setArgument('originalPriceTo', $value);

        return $this;
    }

    public function setVolumeFrom($value)
    {
        $this->setArgument('volumeFrom', $value);

        return $this;
    }

    public function setVolumeTo($value)
    {
        $this->setArgument('volumeTo', $value);

        return $this;
    }

    public function setPageNo($value)
    {
        $this->setArgument('pageNo', $value);

        return $this;
    }

    public function setPageSize($value)
    {
        $this->setArgument('pageSize', $value);

        return $this;
    }

    public function setSort($value)
    {
        $this->setArgument('sort', $value);

        return $this;
    }

    public function setStartCreditScore($value)
    {
        $this->setArgument('startCreditScore', $value);

        return $this;
    }

    public function setEndCreditScore($value)
    {
        $this->setArgument('endCreditScore', $value);

        return $this;
    }

    public function setHighQualityItems($value)
    {
        $this->setArgument('highQualityItems', $value ? 'true' : 'false');

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
