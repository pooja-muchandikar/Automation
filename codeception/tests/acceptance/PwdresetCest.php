<?php

use Page\Constants as ConstantsPage;

class PwdresetCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $myAccount );
        $I->amOnPage( ConstantsPage :: $forgotPassword );
        $I->seeElement( ConstantsPage :: $userLogin );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userName );
        $I->seeElement( ConstantsPage :: $userSubmit );
        $I->click( ConstantsPage :: $userSubmit );
        
    }
}