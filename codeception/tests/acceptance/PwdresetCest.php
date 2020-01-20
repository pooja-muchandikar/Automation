<?php

class PwdresetCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('https://rtmedia.io/my-account/');
        $I->amOnPage('https://rtmedia.io/wp-login.php?action=lostpassword');
        if($I->seeElement('#user_login')){
            $I->fillField('#user_login');
            $I->seeElement('#wp-submit');
            $I->click('#wp-submit');
        } else {
            return false;
        }     

        
    }
}