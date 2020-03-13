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
        $I->waitForElementVisible( ConstantsPage ::  $addonsMenuLink, 20 );
        $I->click( ConstantsPage ::  $addonsMenuLink );
        $I->scrollTo( ConstantsPage :: $loadMore );

        $I->waitForElementVisible( ConstantsPage :: $usefulLinks, 20 );

        $I->waitForElementVisible( ConstantsPage :: $footerBlogLink, 20 );
        $I->click( ConstantsPage :: $footerBlogLink );

        $I->amOnPage( ConstantsPage :: $blog );
        $I->waitForElementVisible( ConstantsPage :: $amazonS3MenuLink, 20 );
        $I->click( ConstantsPage :: $amazonS3MenuLink );
        
        $I->scrollTo( ConstantsPage :: $alignCenter );
        $I->waitForElementVisible( ConstantsPage :: $footerProductsLink, 20 );
        $I->click( ConstantsPage :: $footerProductsLink );
        
        $I->amOnPage('/');
        $I->waitForElementVisible( ConstantsPage :: $footerSupportLink, 20 );
        $I->click( ConstantsPage :: $footerSupportLink );
        $I->scrollTo( ConstantsPage :: $footerSocialMedia );

        $I->waitForElementVisible( ConstantsPage ::  $footerRefundPolicyLink, 20 );
        $I->amOnPage( ConstantsPage :: $refundPolicy );
        $I->waitForElementVisible( ConstantsPage :: $siteBranding, 20 );
        $I->click( ConstantsPage :: $siteBranding );

        echo "..........Navigation through random pages done!!!!..........";


    }
}

?>