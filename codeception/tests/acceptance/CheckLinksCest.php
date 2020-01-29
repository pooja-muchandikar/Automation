<?php

class CheckLinksCest
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->scrollTo('.wp-block-button.aligncenter');

        $I->openNewTab('.wp-block-button.aligncenter');
        $I->amOnPage('/products/rtmedia-pro/');
        $I->closeTab();

        $I->switchToPreviousTab();
        $I->seeElement('#menu-item-149021');
        $I->click('#menu-item-149021');
        $I->wait(2);

        $I->scrollTo('#rtm-load-more');
        $I->wait(2);
        $I->seeElement('#menu-useful-links');
        $I->seeElement('#menu-item-2434396');
        $I->click('#menu-item-2434396');
        $I->amOnPage('/blog');
        $I->wait(2);

        $I->seeElement('#menu-item-457582');
        $I->click('#menu-item-457582');

        $I->scrollTo('.wp-block-button.aligncenter');

        $I->seeElement('#menu-item-74452');
        $I->click('#menu-item-74452');
        $I->wait(2);

        $I->seeElement('#menu-item-161547');
        
        $I->amOnPage('/');

        $I->seeElement('#menu-item-29708');
        $I->click('#menu-item-29708');

        $I->scrollTo('.footer-social-media');

        $I->seeElement('#menu-item-2345356');
        $I->amOnPage('/refund-policy/');
        $I->wait(2);

        $I->seeElement('.site-branding');
        $I->click('.site-branding');

        echo "..........Navigation through random pages done!!!!..........";




    }
}

?>