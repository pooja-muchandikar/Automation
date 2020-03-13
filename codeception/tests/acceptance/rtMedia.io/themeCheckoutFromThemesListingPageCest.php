<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
use Page\eddFields as eddFieldsPage;


class themeCheckoutFromThemesListingPageCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->waitForElementVisible( ConstantsPage :: $themesMenuLink, 20  );
        $I->click( ConstantsPage :: $themesMenuLink );

        $I->scrollTo( ConstantsPage :: $wpBlockImage );
        $I->waitForElementVisible( ConstantsPage :: $wpBlockImage, 20 );
        $I->waitForElementVisible( ConstantsPage :: $wpImage, 20 );
        $I->click( ConstantsPage :: $wpImage );

        echo ".........Theme Checkout Flow.........";

        echo ".....Add to Cart......";
        $I->waitForElementVisible( ConstantsPage :: $eddSubmit, 20 );
        $I->click( ConstantsPage :: $eddSubmit );

        echo ".....Checkout..... ";
        $I->waitForElementVisible( ConstantsPage :: $eddSubmit, 20 );
        $I->click( ConstantsPage :: $eddSubmit );
        $I->amOnPage( ConstantsPage :: $checkout );

        $eddVariables = new eddFieldsPage( $I );
        $eddVariables->eddVariables();

        $I->waitForElementVisible( ConstantsPage :: $eddPurchaseReceipt, 20 );
       
        echo nl2br(".....Theme Purchase From Themes Listing Page Done Successfully!!.....");



    }
}

?>