<?php

declare(strict_types=1);

namespace MageSuite\PersistentSitemap\Model\Sitemap;

class Sitemap extends \Magento\Sitemap\Model\Sitemap
{
    protected function _getUrl($url, $type = \Magento\Framework\UrlInterface::URL_TYPE_LINK) //phpcs:ignore
    {
        if (stripos($url, 'http') === 0) {
            return ltrim($url, '/');
        }

        return $this->_getStoreBaseUrl($type) . ltrim($url, '/');
    }

    public function getSitemapUrl($sitemapPath, $sitemapFileName) //phpcs:ignore
    {
        $storeBaseDomain = $this->_getStoreBaseDomain();

        if (!str_contains($storeBaseDomain, \Magento\Framework\App\Filesystem\DirectoryList::MEDIA)) {
            $storeBaseDomain = sprintf('%s/%s', $storeBaseDomain, \Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
        }

        return $storeBaseDomain . str_replace('//', '/', $sitemapPath . '/' . $sitemapFileName);
    }
}
