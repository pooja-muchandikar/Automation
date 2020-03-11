<?php

use Page\Constants as ConstantsPage;
use Page\eddFields as eddFieldsPage;


class productCheckoutByRegistratingNewUserCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
       
        $I->waitForElementVisible( ConstantsPage :: $pageMenu, 20 );
        $I->click( ConstantsPage :: $pageMenu );


        $I->waitForElementVisible( ConstantsPage :: $eddPurchase, 20 );
        $I->click( ConstantsPage :: $eddPurchase );

        $I->waitForElementVisible( ConstantsPage :: $eddSubmit, 20 );
        $I->click( ConstantsPage :: $eddSubmit );
        
        $I->amOnPage( ConstantsPage :: $checkout );

        $I->waitForElementVisible( ConstantsPage :: $eddEmail, 20 );
        $I->fillField( ConstantsPage :: $eddEmail, ConstantsPage :: $eddEmailStr );

        $I->waitForElementVisible( ConstantsPage :: $eddFirstName, 20 );
        $I->fillField( ConstantsPage :: $eddFirstName, ConstantsPage :: $eddFirstNameStr );

        $I->waitForElementVisible( ConstantsPage :: $eddLastName, 20 );
        $I->fillField( ConstantsPage :: $eddLastName, ConstantsPage :: $eddLastNameStr );

        $I->waitForElementVisible( ConstantsPage :: $eddUserLogin, 20 );
        $I->fillField( ConstantsPage :: $eddUserLogin, ConstantsPage :: $eddUserLoginStr );

        $I->waitForElementVisible( ConstantsPage :: $eddUserPass, 20 );
        $I->fillField( ConstantsPage :: $eddUserPass, ConstantsPage :: $eddUserPassStr );

        $I->waitForElementVisible( Constantspage :: $eddUserPassConfirm, 20 );
        $I->fillField( ConstantsPage :: $eddUserPassConfirm, ConstantsPage :: $eddUserPassConfirmStr );
        $I->click( ConstantsPage :: $eddShowTerms );

        $eddVariables = new eddFieldsPage( $I );
        $eddVariables->eddVariables();

        $I->waitForElementVisible( ConstantsPage :: $eddPurchaseReceipt, 20 );

        echo nl2br(".....User Registration With Product Purchase Done Successfully!!..... ");
        
  
    }
}

?>