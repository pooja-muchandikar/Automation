<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Step\Argument\PasswordArgument;
use \Codeception\Util\Locator;

class PostCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        #$loginPage->loginAsAdmin( ConstantsPage::$userName, new PasswordArgument(ConstantsPage::$password), ConstantsPage::$saveSession );

        $loginPage->loginAsAdmin();
        // $I->amOnPage( '/wp-admin' );
        // $I->pause();
        // $I->seeElement('#user_login');
        // $I->fillField('#user_login', 'pooja.muchandikar');
        // $I->seeElement('#user_pass');
        // $I->fillField('#user_pass', '1100');
        // $I->seeElement('#wp-submit');
        // $I->click('#wp-submit');
        $I->seeElement('#menu-posts');
        $I->click('#menu-posts');
        $I->wait(3);
        $I->amOnPage('/wp-admin/post-new.php');
        $I->seeElement('#post-title-0');
        $I->fillField('#post-title-0', 'LoremIpsum this is test post');
        $I->wait(2);
        $I->seeElement('.edit-post-header .components-button.editor-post-publish-button, .edit-post-header .components-button.editor-post-publish-panel__toggle');
        $I->click('.edit-post-header .components-button.editor-post-publish-button, .edit-post-header .components-button.editor-post-publish-panel__toggle');
        $I->seeElement('.editor-post-publish-button');
        $I->click('.editor-post-publish-button');
        $I->wait(1);
        $logout = new LogoutPage( $I );
        $logout->logout();


    }
}