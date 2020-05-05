<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
use Page\eddFields as eddFieldsPage;


class productCheckoutCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->waitForElementVisible( ConstantsPage :: $checkoutMenu, 20 );
        $I->click( ConstantsPage :: $checkoutMenu );

        $I->waitForElementVisible( ConstantsPage :: $eddPurchase, 20 );
        $I->click( ConstantsPage :: $eddPurchase );
        $I->waitForElementVisible( ConstantsPage :: $eddSubmit, 20 );
        $I->click( ConstantsPage :: $eddSubmit );

        echo "..........CHECKOUT PAGE.........";


        $eddVariables = new eddFieldsPage( $I );
        $eddVariables->eddVariables();

        $I->waitForElementVisible( ConstantsPage :: $eddPurchaseReceipt, 20 );

        echo nl2br("..........Product Checkout Done Successfully!........");

        $I->click( ConstantsPage :: $userAccount );
        $I->waitForElementVisible( ConstantsPage :: $eddDownloadZip, 20 );
        $I->click( ConstantsPage :: $eddDownloadZip );
        
        echo ".........Product ZIP Downloaded Successfully..........";
    }
}

?>