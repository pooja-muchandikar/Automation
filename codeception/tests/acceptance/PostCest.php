<?php

class PostCest
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
        $I->seeElement('#menu-posts');
        $I->click('#menu-posts');
        $I->wait(3);
    }
}