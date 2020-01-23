<?php

#use \Codeception\Util\Locator;

class PageCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage( '/wp-admin' );
        $I->pause();
        $I->seeElement('#user_login');
        $I->fillField('#user_login', 'pooja.muchandikar');
        $I->seeElement('#user_pass');
        $I->fillField('#user_pass', '1100');
        $I->seeElement('#wp-submit');
        $I->click('#wp-submit');
        $I->seeElement('#menu-pages');
        $I->click('#menu-pages');
        $I->wait(3);
        $I->seeElement('.wrap .wp-heading-inline+.page-title-action');
        $I->click('.wrap .wp-heading-inline+.page-title-action');
        $I->seeElement('#post-title-0');
        $I->fillField('#post-title-0', 'LoremIpsum this is test post');
        $I->wait(2);
        $I->seeElement('.edit-post-header .components-button.editor-post-publish-button, .edit-post-header .components-button.editor-post-publish-panel__toggle');
        $I->click('.edit-post-header .components-button.editor-post-publish-button, .edit-post-header .components-button.editor-post-publish-panel__toggle');
        $I->seeElement('.editor-post-publish-button');
        $I->click('.editor-post-publish-button');
    
    }
}