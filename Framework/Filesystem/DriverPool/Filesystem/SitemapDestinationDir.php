<?php

namespace MageSuite\PersistentSitemap\Framework\Filesystem\DriverPool\Filesystem;

class SitemapDestinationDir extends \Magento\Framework\Filesystem
{
    public function getDirectoryWrite($directoryCode, $driverCode = \Magento\Framework\Filesystem\DriverPool::FILE)
    {
        return parent::getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);
    }
}
