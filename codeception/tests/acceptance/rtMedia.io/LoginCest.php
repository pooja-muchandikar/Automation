<?php

use Page\Constants as ConstantsPage;

class LoginCest 
{

    public function frontpageWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( ConstantsPage :: $wpadmin );
        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userLoginStr );

        $I->waitForElementVisible( ConstantsPage :: $userPass,  20 );
        $I->fillField( ConstantsPage :: $userPass, ConstantsPage :: $userPassStr);
        $I->waitForElementVisible( ConstantsPage :: $userSubmit, 20 );
        $I->click( ConstantsPage :: $userSubmit );

        $I->waitForElementVisible( ConstantsPage :: $adminMenu, 20);

        echo ".....User Logged-in Successfully!!!.....";

    }
}

