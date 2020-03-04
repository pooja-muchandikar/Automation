<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class PageCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();
        
        $I->seeElement( ConstantsPage :: $menuPages );
        $I->click( ConstantsPage :: $menuPages );
        $I->waitForElementVisible( ConstantsPage :: $pageTitle, 20 );
        $I->click( ConstantsPage :: $pageTitle );

        $I->seeElement( ConstantsPage :: $postTitle );
        $I->fillField( ConstantsPage :: $postTitle, ConstantsPage :: $postTitleStr );
        $I->waitForElementVisible( ConstantsPage :: $postPublish, 20 );
        $I->click( ConstantsPage :: $postPublish );
        $I->seeElement( ConstantsPage :: $publishButton );
        $I->click( ConstantsPage :: $publishButton );
        $I->wait(1);
        $logout = new LogoutPage( $I );
        $logout->logout();
    
    }
}