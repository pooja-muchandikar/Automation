<?php

class PwdresetCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/my-account/');
        $I->amOnPage('/wp-login.php?action=lostpassword');
        if($I->seeElement('#user_login')){
            $I->fillField('#user_login');
            $I->seeElement('#wp-submit');
            $I->click('#wp-submit');
        } else {
            return false;
        }     

        
    }
}