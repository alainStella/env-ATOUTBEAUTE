<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.cache.paypal.merchant_integration' shared service.

return $this->services['ps_checkout.cache.paypal.merchant_integration'] = new \Symfony\Component\Cache\Simple\FilesystemCache('merchant-integration', 86400, ${($_ = isset($this->services['ps_checkout.cache.directory']) ? $this->services['ps_checkout.cache.directory'] : ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.2', $this->targetDirs[3], false))) && false ?: '_'}->getPath());
