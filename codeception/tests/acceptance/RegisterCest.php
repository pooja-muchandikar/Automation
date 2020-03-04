<?php

use Page\Constants as ConstantsPage;

class RegisterCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $register );
        $I->seeElement( ConstantsPage :: $userLogin );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $newUserStr );
        $I->seeELement( ConstantsPage :: $newUserEmail );
        $I->fillField( ConstantsPage :: $newUserEmail, ConstantsPage :: $newUserEmailStr );
        $I->seeElement( ConstantsPage :: $userSubmit );
        $I->click( ConstantsPage :: $userSubmit );

    }
}