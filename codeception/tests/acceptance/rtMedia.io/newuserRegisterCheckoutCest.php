<?php

use Page\Constants as ConstantsPage;

class newuserRegisterCheckoutCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
       
        $I->seeElement( ConstantsPage :: $pageMenu );
        $I->click( ConstantsPage :: $pageMenu );


        $I->seeElement( ConstantsPage :: $eddPurchase );
        $I->click( ConstantsPage :: $eddPurchase );
        $I->seeElement( ConstantsPage :: $eddSubmit );
        $I->click( ConstantsPage :: $eddSubmit );
        
        $I->amOnPage( ConstantsPage :: $checkout );

        $I->seeElement( ConstantsPage :: $eddEmail );
        $I->fillField( ConstantsPage :: $eddEmail, ConstantsPage :: $eddEmailStr );

        $I->seeElement( ConstantsPage :: $eddFirstName );
        $I->fillField( ConstantsPage :: $eddFirstName, ConstantsPage :: $eddFirstNameStr );

        $I->seeElement( ConstantsPage :: $eddLastName );
        $I->fillField( ConstantsPage :: $eddLastName, ConstantsPage :: $eddLastNameStr );

        $I->seeElement( ConstantsPage :: $eddUserLogin );
        $I->fillField( ConstantsPage :: $eddUserLogin, ConstantsPage :: $eddUserLoginStr );

        $I->seeElement( ConstantsPage :: $eddUserPass );
        $I->fillField( ConstantsPage :: $eddUserPass, ConstantsPage :: $eddUserPassStr );

        $I->seeElement( Constantspage :: $eddUserPassConfirm );
        $I->fillField( ConstantsPage :: $eddUserPassConfirm, ConstantsPage :: $eddUserPassConfirm );

        $I->click( ConstantsPage :: $eddShowTerms );
        
        $I->seeElement( ConstantsPage :: $eddTerms );
        $I->click(ConstantsPage :: $eddTerms );

        $I->seeElement( ConstantsPage :: $eddPurchaseButton );
        $I->click( ConstantsPage :: $eddPurchaseButton );

        echo "..........Purchase History Page..........";

        $I->wait(2);

        
  
    }
}

?>