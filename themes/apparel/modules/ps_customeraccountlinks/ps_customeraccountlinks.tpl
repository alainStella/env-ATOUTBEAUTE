{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div id="block_myaccount_infos" class="col-md-3 links wrapper">
    <div class="column-title hidden-sm-down">
        <span>
            {l s='Your account' d='Shop.Theme.Customeraccount'}
        </span>
    </div>
    <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
        <span>{l s='Your account' d='Shop.Theme.Customeraccount'}</span>
        <span class="float-xs-right icon">
            <span class="navbar-toggler collapse-icons">
                <i class="fa fa-angle-down add" aria-hidden="true"></i>
                <i class="fa fa-angle-up remove" aria-hidden="true"></i> 
            </span>
        </span>
    </div>
    <ul class="footer-column-content collapse footer-links" id="footer_account_list">
        {foreach from=$my_account_urls item=my_account_url}
            <li>
                <a href="{$my_account_url.url}" title="{$my_account_url.title}" rel="nofollow">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>{$my_account_url.title}
                </a>
            </li>
        {/foreach}
        {hook h='displayMyAccountBlock'}
    </ul>
</div>