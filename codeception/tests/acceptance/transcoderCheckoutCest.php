<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;

class transcoderCheckoutCest
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage('/my-account');
       
        $I->seeElement('#menu-item-163176');
        $I->click('#menu-item-163176');

        $I->wait(2);

        $I->seeElement('.wp-block-button.aligncenter.transcoder-banner-button.subscribe-plan');
        $I->click('.wp-block-button.aligncenter.transcoder-banner-button.subscribe-plan');

        $I->wait(2);

        $I->seeElement('.wp-block-button.transcoder-try-now-button');
        $I->click('.wp-block-button.transcoder-try-now-button');

        $I->wait(2);

         #$I->scrollTo('#edd_show_terms');
         $I->seeElement('#edd_agree_to_terms');
         $I->click('#edd_agree_to_terms');
         $I->seeElement('#edd-purchase-button');
         $I->click('#edd-purchase-button');
 
         echo "..........Purchase History Page........";
 
         $I->amOnPage('/checkout/purchase-confirmation/');
 
         $I->click('.user-acount.shrink');
         
         echo "..........Transcoder Free plugin..........";
    }
}

?>