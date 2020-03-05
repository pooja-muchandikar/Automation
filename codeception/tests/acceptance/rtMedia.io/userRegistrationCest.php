<?php

use Page\Constants as ConstantsPage;

class userRegistrationCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->seeElement( ConstantsPage :: $userRegisterLink );
        $I->click( ConstantsPage :: $userRegisterLink );

        $I->seeElement( ConstantsPage :: $userLogin );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $newUserStr );
        $I->seeELement( ConstantsPage :: $newUserEmail );
        $I->fillField( ConstantsPage :: $newUserEmail, ConstantsPage :: $newUserEmailStr );
        $I->seeElement( ConstantsPage :: $userSubmit );
        $I->click( ConstantsPage :: $userSubmit );

        echo ".....Registration Done Successfully. Please check your email!.....";

    }
}