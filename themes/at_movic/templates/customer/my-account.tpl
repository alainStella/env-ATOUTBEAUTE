{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Your account' d='Shop.Theme.Global'}
{/block}

{block name='page_content'}
  <p>
    {l s='From your account dashboard you can view your' d='Shop.Theme.Global'} <a href="{$urls.pages.history}">{l s='recent orders' d='Shop.Theme.Global'}</a> {l s=', manage your' d='Shop.Theme.Global'} {if $customer.addresses|count}<a href="{$urls.pages.addresses}">{else}<a href="{$urls.pages.address}">{/if}{l s='shipping and billing addresses' d='Shop.Theme.Global'}</a> {l s='and' d='Shop.Theme.Global'} <a rel="nofollow" href="{$urls.pages.identity}">{l s='edit your password and account details' d='Shop.Theme.Global'}</a>
  </p>
{/block}


{block name='page_footer'}
  {block name='my_account_links'}
  {/block}
{/block}
