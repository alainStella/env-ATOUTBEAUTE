<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.advanced_parameters.performance.memcache.form_builder' shared service.

return $this->services['prestashop.admin.advanced_parameters.performance.memcache.form_builder'] = ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}->createNamedBuilder('', 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\MemcacheServerType');
