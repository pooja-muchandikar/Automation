<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
use Page\eddFields as eddFieldsPage;


class transcoderCheckoutCest
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage( ConstantsPage :: $myAccount );
       
        $I->waitForElementVisible( ConstantsPage :: $transcoderMenuLink, 20 );
        $I->click( ConstantsPage :: $transcoderMenuLink );

        $I->waitForElementVisible( ConstantsPage :: $subscribePlanButton, 20 );
        $I->click( ConstantsPage :: $subscribePlanButton );

        $I->waitForElementVisible( ConstantsPage :: $tryNowButton, 20 );
        $I->wait(2);
        $I->click( ConstantsPage :: $tryNowButton );

        $eddVariables = new eddFieldsPage( $I );
        $eddVariables->eddVariables();
 
        $I->waitForElementVisible( ConstantsPage :: $eddPurchaseReceipt, 20 );
        echo ".....Transcoder Product Purchased Successfully!!.....";

        $I->click( ConstantsPage :: $userAccount );

    }
}

?>