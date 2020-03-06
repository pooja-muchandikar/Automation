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
        $I->seeElement( ConstantsPage ::  $addonsMenuLink );
        $I->click( ConstantsPage ::  $addonsMenuLink );
        $I->scrollTo( ConstantsPage :: $loadMore );

        $I->waitForElementVisible( ConstantsPage :: $usefulLinks, 20 );
        $I->seeElement( ConstantsPage :: $footerBlogLink );
        $I->click( ConstantsPage :: $footerBlogLink );

        $I->amOnPage( ConstantsPage :: $blog );
        $I->waitForElementVisible( ConstantsPage :: $amazonS3MenuLink, 20 );
        $I->click( ConstantsPage :: $amazonS3MenuLink );
        
        $I->scrollTo( ConstantsPage :: $alignCenter );
        $I->seeElement( ConstantsPage :: $footerProductsLink );
        $I->click( ConstantsPage :: $footerProductsLink );
        
        $I->amOnPage('/');
        $I->seeElement( ConstantsPage :: $footerSupportLink );
        $I->click( ConstantsPage :: $footerSupportLink );
        $I->scrollTo( ConstantsPage :: $footerSocialMedia );

        $I->seeElement( ConstantsPage ::  $footerRefundPolicyLink );
        $I->amOnPage( ConstantsPage :: $refundPolicy );
        $I->waitForElementVisible( ConstantsPage :: $siteBranding, 20 );
        $I->click( ConstantsPage :: $siteBranding );

        echo "..........Navigation through random pages done!!!!..........";


    }
}

?>