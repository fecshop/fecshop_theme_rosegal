<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
?>
<div id="top_nav">
	<input type="hidden" class="currentBaseUrl" value="<?= $currentBaseUrl ?>" />
	<input type="hidden" class="logoutUrl" value="<?= $logoutUrl ?>" />
	<input type="hidden" class="logoutStr" value="<?= Yii::$service->page->translate->__('Logout'); ?>" />
	<input type="hidden" class="welcome_str" value="<?= Yii::$service->page->translate->__('Hi,'); ?>" />
	<div class="top_nav_inner">	    
		<div class="top_nav_left">
			<dl class="top_currency">
                GET FREE POINTS EVERYDAY
            </dl>
            <dl class="top_currency">|</dl>
            <dl class="">
                NEW SIGN UPS GET 15% OFF
            </dl>
            <dl class="top_currency">|</dl>
            <dl class="top_lang">
				<dt >
                    <span class="current_lang" rel="<?= $currentStore ?>">
                        <?= $currentStoreLang ?>
                    </span>
                    <b></b>
                </dt>
				<dd class="lang_list">
                    <em class="triangle_bg"></em>
                    <em class="triangle_bd"></em>
					<ul>
						<?php foreach($stores as $store=> $langName):   ?>
							<li  class="store_lang"  rel="<?= $store ?>"><a href="javascript:void(0)"><?= $langName ?></a></li>
						<?php endforeach; ?>
				    </ul>
				</dd>
			</dl>
             <dl class="">|</dl>
			<!-- 币种选择 -->
			<dl class="top_currency">
				<dt>
                    <span class="current_currency">
                        <label>
                            <?= $currency['symbol'] ?>
                        </label>
                        <?= $currency['code'] ?>
                    </span>
                    <b></b>
                </dt>
				<dd class="currency_list">
					<ul>
					<em class="triangle_bg"></em>
                    <em class="triangle_bd"></em>
					<?php foreach($currencys as $c):    ?>
						<li rel="<?= $c['code'] ?>"><label><?= $c['symbol'] ?></label><?= $c['code'] ?></li>
					<?php endforeach; ?>							
					</ul>
				</dd>
			</dl>
            <dl class="">|</dl>
            <dl class="top_currency">
                <a href="<?= Yii::$service->url->getUrl('customer/contacts') ?>" >
                    Contact Us
                </a>
            </dl>
		</div>
	</div><!--end .top_nav_inner-->
</div><!--end #top_nav-->

<div id="top_main">
	<div class="top_main_inner pr">
		<div class="top_header clearfix">
			
			<div class="logo">
                <a titel="fecshop logo" href="<?= $homeUrl ?>" style="">
                    <img src="<?= Yii::$service->image->getImgUrl('custom/logo.png','appfront'); ?>"  />
                </a>
            </div>
            <div style="float:left;margin: 10px 0 0 0;">
            FREE SHIPPING WORLDWIDE
            </div>
            <div class="topSeachForm">
				<?= Yii::$service->page->widget->render('topsearch',$this); ?>
			</div>
            
            <div class="account_cart">
                <div class="login-text t_r">
                    <span id="js_isNotLogin">
                        <a href="<?= Yii::$service->url->getUrl('customer/account/login') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('Join | Sign in'); ?></a>
                    </span>
                </div>
                <dl class="top_account t_r">
                    <dt>
                        <a href="<?= Yii::$service->url->getUrl('customer/account') ?>" rel="nofollow" class="mycoount"></a>
                    </dt>
                    <dd style="">
                        <ul>
                            <li><a href="<?= Yii::$service->url->getUrl('customer/account') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('My Account'); ?></a></li>
                            <li><a href="<?= Yii::$service->url->getUrl('customer/order') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('My Orders'); ?></a></li>
                            <li><a href="<?= Yii::$service->url->getUrl('customer/productfavorite') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('My Favorites'); ?></a></li>
                            <li><a href="<?= Yii::$service->url->getUrl('customer/productreview') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('My Review'); ?></a></li>
                             <li><a href="<?= Yii::$service->url->getUrl('customer/account/logout') ?>" rel="nofollow"><?= Yii::$service->page->translate->__('Logout'); ?></a></li>
                        </ul>
                    </dd>
                </dl>
                <div class="mywish t_r">
                    <a href="<?= Yii::$service->url->getUrl('customer/productfavorite') ?>">
                        <span class="mywishbg"></span>
                    </a>
                    <span class="mywish-text" id="js_favour_num">0</span>
                </div>
                
                
                <div class="mycart t_r">
                    <a href="<?= Yii::$service->url->getUrl('checkout/cart') ?>" rel="nofollow" class="my-bag-icon db pr" title="My Bag">
                        <i class="dib vm"></i> 
                        <em class="shopping_bag_num db f12 pa mycart-text" id="js_cart_items">0</em>
                    </a>
                
                </div>
            </div>
		</div><!--end .top_header-->
    </div><!--end .top_main_inner-->
</div>
		