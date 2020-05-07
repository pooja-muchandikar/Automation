<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class createPageCest
{
    public function pageCreation(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();
        
        $I->waitForElementVisible( ConstantsPage :: $menuPages, 20 );
        $I->click( ConstantsPage :: $menuPages );
        
        $I->waitForElementVisible( ConstantsPage :: $pageTitle, 20 );
        $I->click( ConstantsPage :: $pageTitle );

        $I->waitForElementVisible( ConstantsPage :: $postTitle, 20 );
        $I->fillField( ConstantsPage :: $postTitle, ConstantsPage :: $postTitleStr );

        $I->waitForElementVisible( ConstantsPage :: $postPublish, 20 );
        $I->click( ConstantsPage :: $postPublish );

        $I->waitForElementVisible( ConstantsPage :: $publishButton, 20 );
        $I->click( ConstantsPage :: $publishButton );
        $I->wait(1);

            
    }
}