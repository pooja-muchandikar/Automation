<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Step\Argument\PasswordArgument;
use \Codeception\Util\Locator;

class createPostCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();
        
        $I->waitForElementVisible( ConstantsPage :: $menuPosts, 20 );
        $I->click( ConstantsPage :: $menuPosts );

        $I->amOnPage( ConstantsPage :: $postAdd );
        $I->waitForElementVisible( ConstantsPage :: $postTitle, 20 );
        $I->fillField( ConstantsPage :: $postTitle, ConstantsPage :: $postTitleStr);
        $I->waitForElementVisible( ConstantsPage :: $postPublish, 20 );
        $I->click( ConstantsPage :: $postPublish );

        $I->waitForElementVisible( ConstantsPage :: $publishButton, 20 );
        $I->click( ConstantsPage :: $publishButton );
        $I->wait(2);

    

    }
}