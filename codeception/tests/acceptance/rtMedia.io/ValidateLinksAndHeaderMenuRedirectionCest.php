<?php

use Page\Constants as ConstantsPage;

class ValidateLinksAndHeaderMenuRedirectionCest
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->scrollTo( ConstantsPage :: $alignCenter );

        $I->openNewTab( ConstantsPage :: $alignCenter );
        $I->amOnPage( ConstantsPage :: $rtMediaPro );
        $I->closeTab();

        $I->switchToPreviousTab();
        $I->seeElement( ConstantsPage ::  $menuItem );
        $I->click( ConstantsPage ::  $menuItem );
        $I->scrollTo( ConstantsPage :: $loadMore );

        $I->waitForElementVisible( ConstantsPage :: $usefulLinks, 20 );
        $I->seeElement( ConstantsPage :: $menuItem1 );
        $I->click( ConstantsPage :: $menuItem1 );

        $I->amOnPage( ConstantsPage :: $blog );
        $I->waitForElementVisible( ConstantsPage :: $menuItem2, 20 );
        $I->click( ConstantsPage :: $menuItem2 );
        
        $I->scrollTo( ConstantsPage :: $alignCenter );
        $I->seeElement( ConstantsPage :: $menuItem3 );
        $I->click( ConstantsPage :: $menuItem3 );
        
        $I->amOnPage('/');
        $I->seeElement( ConstantsPage :: $menuItem4 );
        $I->click( ConstantsPage :: $menuItem4 );
        $I->scrollTo( ConstantsPage :: $footerSocialMedia );

        $I->seeElement( ConstantsPage :: $menuItem5 );
        $I->amOnPage( ConstantsPage :: $refundPolicy );
        $I->waitForElementVisible( ConstantsPage :: $siteBranding, 20 );
        $I->click( ConstantsPage :: $siteBranding );

        echo "..........Navigation through random pages done!!!!..........";


    }
}

?>