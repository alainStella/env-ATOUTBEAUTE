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
 
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}

        <header class="header__header">
        <h1>atout beauté</h1>
        <div class="header__text">
            <div class="desc">
                <p>créateur & fournisseur de</p>
                <h2>bijoux fantaisie </h2>
                <h2>& d'accessoires</h2>
            </div>
            <div class="header__btn">
                <button class="button type3" id="lebutton"><a href="">prendre rendez-vous</a></button>
                <a class="le__a" href="">Réserver un créneau <i class='bx bx-right-arrow-alt' ></i></a>
            </div>
        </div>

            <img src="{$urls.img_url}fille 1.png" alt="">
        </header>

        <section class="section__produit">
            <div class="produit produit1">
                <a href="329-pierres-naturelles">
                 <div class="produit__text">
                    <h2>pierres</h2>
                    <h2>naturelles</h2>
                </div>
                </a>
            </div>
            <div class="produit produit2">
                <a href="78-bougies-bijou">
                <div class="produit__text">
                    <h2>bougies</h2>
                    <h2>bijoux</h2>
                </div>
                </a>
            </div>
            <div class="produit produit3">
                <a href="14-cosmetique-soins">
                <div class="produit__text">
                    <h2>accessoires</h2>
                    <h2>maquillage</h2>
                </div>
                </a>
            </div>
        </section>
        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
                         <section class="collection">
            <div class="coll__haut">
                <div class="haut__text">
                    <p>collection</p>
                    <h2>AUTOMNE-HIVER</h2>
                </div>
                <div class="haut__card">
                    <a class="caard caard1" href="recherche?controller=search&s=acier">
                        <div class="coll__cate"><h3>bijoux</h3><h3>en acier</h3></div>
                    </a>
                    <a class="caard caard2" href="recherche?controller=search&s=oiseaux">
                        <div class="coll__cate" ><h3>oiseaux</h3><h3>nouvelle collection</h3></div>
                    </a>
                    <a class="caard caard3" href="307-pause-dejeuner">
                        <div class="coll__cate"><h3>pause</h3><h3>déjeuner</h3></div>
                    </a>
                    <a class="caard caard4" href="15-coiffure">
                        <div class="coll__cate" ><h3>accessoires</h3><h3>cheveux</h3></div>
                    </a>
                    <a class="caard caard6" href="recherche?controller=search&s=zodiac">
                        <div class="coll__cate"><h3>zodiac</h3><h3>nouvelle collection</h3></div>
                    </a>
                    <a  class="caard caard5" href="">
                        <div class="coll__cate"><h3>made in france</h3><h3>accessoires cheveux</h3></div>
                    </a>
                </div>
            </div>
            
            <div class="coll__bas">
                <div class="bas__img">
                    <img class="fille1" src="{$urls.img_url}fille 3.png" alt="">
                    <img class="fille2" src="{$urls.img_url}fille 2.png" alt="">
                    <div class="coll__titre">
                        <h2>CRÉATEUR DE MODE DEPUIS 2005 </h2>
                    </div>
                </div>
                <div class="bas__text">
                    <p>Fabricant de bijoux & accessoires spécialisé dans la fabrication de bijoux fantaisie & d'accessoires pour les grandes centrales d'achat, nous développons chaque saison de nouvelles collections en suivant les nouvelles tendances modes pour vous proposer des produits attrayants aux meilleurs prix.
                    </p>
                    <div class="bas__btn">
                        <a href="275-tous-les-produits">VOIR LES PRODUITS</a>
                    </div>
                </div>
            </div>
        </section>
          {/block}
        {/block}
      </section>
    {/block}
