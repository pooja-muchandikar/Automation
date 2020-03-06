<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class themeCheckoutFromThemesListingPageCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->seeElement( ConstantsPage :: $themesMenuLink  );
        $I->click( ConstantsPage :: $themesMenuLink );

        $I->scrollTo( ConstantsPage :: $wpBlockImage );
        $I->seeElement( ConstantsPage :: $wpBlockImage );
        $I->seeElement( ConstantsPage :: $wpImage );
        $I->click( ConstantsPage :: $wpImage );

        echo ".........Theme Checkout Flow.........";

        echo ".....Add to Cart......";
        $I->seeElement( ConstantsPage :: $eddSubmit );
        $I->click( ConstantsPage :: $eddSubmit );

        echo ".....Checkout..... ";
        $I->seeElement( ConstantsPage :: $eddSubmit );
        $I->click( ConstantsPage :: $eddSubmit );
        $I->amOnPage( ConstantsPage :: $checkout );

        $I->seeElement( ConstantsPage :: $eddTerms );
        $I->click( ConstantsPage :: $eddTerms );
        $I->seeElement( ConstantsPage :: $eddPurchaseButton );
        $I->click( ConstantsPage :: $eddPurchaseButton );

        $I->amOnPage( ConstantsPage :: $purchaseHistory );   
        
        echo ".....Theme Purchase From Themes Listing Page Done Successfully!!.....";



    }
}

?>