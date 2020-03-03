<?php

use Page\Constants as ConstantsPage;

class FirstCest 
{

    public function frontpageWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( ConstantsPage :: $wpadmin );
        $I->pause();
        $I->seeElement( ConstantsPage :: $userLogin );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userLoginStr );
        $I->seeElement( ConstantsPage :: $userPass );
        $I->fillField( ConstantsPage :: $userPass, ConstantsPage :: $userPassStr);
        $I->seeElement( ConstantsPage :: $userSubmit );
        $I->click( ConstantsPage :: $userSubmit );

    }
}

