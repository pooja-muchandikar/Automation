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

        $I->amOnPage( ConstantsPage :: $myAccount );
       
        $I->seeElement( ConstantsPage :: $transcoderMenuLink );
        $I->click( ConstantsPage :: $transcoderMenuLink );

        $I->waitForElementVisible( ConstantsPage :: $subscribePlanButton, 20 );
        $I->click( ConstantsPage :: $subscribePlanButton );

        $I->seeElement( ConstantsPage :: $tryNowButton );
        $I->wait(2);
        $I->click( ConstantsPage :: $tryNowButton );

        $I->seeElement( ConstantsPage ::  $eddTerms );
        $I->click( ConstantsPage ::  $eddTerms );
        $I->seeElement( ConstantsPage :: $eddPurchaseButton );
        $I->click( ConstantsPage :: $eddPurchaseButton );
 
        echo "..........Purchase History Page........";
 
        $I->amOnPage( ConstantsPage :: $purchaseHistory );
 
        $I->click( ConstantsPage :: $userAccount );

        echo ".....Transcoder Product Purchased Successfully!!.....";
    }
}

?>