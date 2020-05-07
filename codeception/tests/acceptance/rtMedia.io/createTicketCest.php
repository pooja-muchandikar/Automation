<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class createTicketCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->amOnPage( ConstantsPage :: $support );
        $I->waitForElementVisible( ConstantsPage :: $ticketTitle, 20 );
        $I->fillField( ConstantsPage :: $ticketTitle, ConstantsPage :: $ticketTitleStr );

        $I->selectOption( ConstantsPage :: $selectProduct, ConstantsPage :: $selectProductValue );
        $I->scrollTo( ConstantsPage :: $ticketDescription );

        $I->waitForElementVisible( ConstantsPage :: $ticketDescription, 20 );
        $I->fillField( ConstantsPage :: $ticketDescription, ConstantsPage :: $ticketDescriptionStr);
        
        $I->waitForElementVisible( ConstantsPage :: $submitForm, 20 );
        $I->click( ConstantsPage :: $submitForm );

        $I->amOnPage( ConstantsPage :: $support );
        $I->click( ConstantsPage :: $userAccount );
        $I->executeJS( ConstantsPage :: $userAccountSupportTab );


    }
}

?>