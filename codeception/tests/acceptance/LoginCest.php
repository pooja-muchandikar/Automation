<?php

class FirstCest 
{

    public function frontpageWorks(AcceptanceTester $I)
    {
        #$I->amOnPage('https://rtcamp:goodwork@rtmedia-dev.rtm.rt.gw/');
        #$I->amOnPage('https://rtmedia.io');
        $I->amOnPage( '/wp-admin' );
        $I->pause();
        $I->seeElement('#user_login');
        $I->fillField('#user_login', 'pooja.muchandikar');
        $I->seeElement('#user_pass');
        $I->fillField('#user_pass', '1100');
        $I->seeElement('#wp-submit');
        $I->click('#wp-submit');

    }
}

