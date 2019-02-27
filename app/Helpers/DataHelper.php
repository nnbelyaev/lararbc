<?php

namespace App\Helpers;

class DataHelper {
    protected $bannerKeywords = [];

    public function addBannerKeyword($keyword) {
        $this->bannerKeywords[] = $keyword;
    }

    public function getBannerKeywords() {
        return implode(',', $this->bannerKeywords);
    }
}