<?php

declare(strict_types=1);

namespace Siteation\StoreInfoExtra\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class StoreInfoExtra implements ArgumentInterface
{
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get store information
     *
     * @param string $attribute
     * @return mixed
     */
    public function getStoreInfoExtra(string $attribute)
    {
        $path = sprintf('general/store_information_extra/%s', $attribute);
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    public function getFacebook(): string
    {
        return (string) $this->getStoreInfoExtra('facebook_address');
    }

    public function getTwitter(): string
    {
        return (string) $this->getStoreInfoExtra('twitter_handle');
    }

    public function getLinkedIn(): string
    {
        return (string) $this->getStoreInfoExtra('linkedin_address');
    }

    public function getInstagram(): string
    {
        return (string) $this->getStoreInfoExtra('instagram_address');
    }

    public function getPinterest(): string
    {
        return (string) $this->getStoreInfoExtra('pinterest_address');
    }

    public function getYouTube(): string
    {
        return (string) $this->getStoreInfoExtra('youtube_address');
    }

    public function getVimeo(): string
    {
        return (string) $this->getStoreInfoExtra('vimeo_address');
    }

    public function getWhatsApp(): string
    {
        return (string) $this->getStoreInfoExtra('whatsapp_number');
    }
}
