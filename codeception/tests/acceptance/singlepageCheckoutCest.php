<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class singlepageCheckoutCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage('/my-account');

        $I->seeElement('#menu-item-2512333');
        $I->click('#menu-item-2512333');

        $I->scrollTo('.wp-block-image');
        $I->seeElement('.wp-block-image');
        $I->seeElement('.wp-image-114844');
        $I->click('.wp-image-114844');

        echo ".........Theme Checkout Flow.........";

        echo ".....Add to Cart......";
        $I->seeElement('.edd_purchase_submit_wrapper');
        $I->click('.edd_purchase_submit_wrapper');

        echo ".....Checkout..... ";
        $I->seeElement('.edd_purchase_submit_wrapper');
        $I->click('.edd_purchase_submit_wrapper');
        $I->amOnPage('/checkout');

        $I->seeElement('#edd_agree_to_terms');
        $I->click('#edd_agree_to_terms');
        $I->seeElement('#edd-purchase-button');
        $I->click('#edd-purchase-button');

        echo "..........Purchase History Page........";

        $I->amOnPage('/checkout/purchase-confirmation/');     



    }
}

?>