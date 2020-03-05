<?php

use Page\Constants as ConstantsPage;

class LoginCest 
{

    public function frontpageWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( ConstantsPage :: $wpadmin );
        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userLoginStr );
        $I->seeElement( ConstantsPage :: $userPass );
        $I->fillField( ConstantsPage :: $userPass, ConstantsPage :: $userPassStr);
        $I->seeElement( ConstantsPage :: $userSubmit );
        $I->click( ConstantsPage :: $userSubmit );

        echo ".....User Logged-in Successfully!!!.....";

    }
}

