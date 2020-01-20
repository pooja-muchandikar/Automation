<?php

class RegisterCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('https://rtmedia.io');
        $I->seeElement('#site-navigation');
        $I->seeElement('.icon-user-icon');
        $I->click('.icon-user-icon');
        #$I->seeELement('#a.rt-user-profile');
        $I->amOnPage('https://rtmedia.io/wp-login.php?action=register');
        $I->seeElement('#user_login');
        $I->fillField('#user_login', 'pooja.muchandikar');
        $I->seeELement('#user_email');
        $I->fillField('#user_email', 'pooja.muchandikar@rtcamp.com');
        $I->seeElement('#wp-submit');
        $I->click('#wp-submit');

    }
}