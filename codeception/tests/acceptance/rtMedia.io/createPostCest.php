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
        
        $I->seeElement( ConstantsPage :: $menuPosts );
        $I->click( ConstantsPage :: $menuPosts );

        $I->amOnPage( ConstantsPage :: $postAdd );
        $I->seeElement( ConstantsPage :: $postTitle );
        $I->fillField( ConstantsPage :: $postTitle, ConstantsPage :: $postTitleStr);
        $I->waitForElementVisible( ConstantsPage :: $postPublish, 20 );
        $I->click( ConstantsPage :: $postPublish );
        $I->seeElement( ConstantsPage :: $publishButton );
        $I->click( ConstantsPage :: $publishButton );
        $I->wait(2);
        $logout = new LogoutPage( $I );
        $logout->logout();

        echo ".....Post Created Successfully!.....";


    }
}