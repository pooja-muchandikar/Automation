<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class checkoutCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->seeElement('#menu-item-149021');
        $I->click('#menu-item-149021');

        $I->seeElement('#edd_purchase_116837');
        $I->click('#edd_purchase_116837');
        $I->seeElement('.edd_purchase_submit_wrapper ');
        $I->click('.edd_purchase_submit_wrapper ');

        echo "..........CHECKOUT PAGE.........";

        #$I->scrollTo('#edd_show_terms');
        $I->seeElement('#edd_agree_to_terms');
        $I->click('#edd_agree_to_terms');
        $I->seeElement('#edd-purchase-button');
        $I->click('#edd-purchase-button');

        echo "..........Purchase History Page........";

        $I->amOnPage('/checkout/purchase-confirmation/');
        
    }
}

?>