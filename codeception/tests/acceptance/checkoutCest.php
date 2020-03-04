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

        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->seeElement( ConstantsPage :: $checkoutMenu );
        $I->click( ConstantsPage :: $checkoutMenu );

        $I->seeElement( ConstantsPage :: $eddPurchase );
        $I->click( ConstantsPage :: $eddPurchase );
        $I->seeElement( ConstantsPage :: $eddSubmit );
        $I->click( ConstantsPage :: $eddSubmit );

        echo "..........CHECKOUT PAGE.........";

        $I->seeElement( ConstantsPage :: $eddTerms );
        $I->click( ConstantsPage :: $eddTerms );
        $I->seeElement( ConstantsPage :: $eddPurchaseButton );
        $I->click( ConstantsPage :: $eddPurchaseButton );

        echo "..........Purchase History Page........";

        $I->amOnPage( ConstantsPage :: $purchaseHistory );

        $I->click( ConstantsPage :: $userAccount );
        $I->seeElement( ConstantsPage :: $eddDownloadZip );
        $I->click( ConstantsPage :: $eddDownloadZip );
        
        echo ".........ZIP Downloaded Successfully..........";
    }
}

?>