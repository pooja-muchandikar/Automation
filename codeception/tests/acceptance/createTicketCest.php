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
        $I->seeElement( ConstantsPage :: $ticketTitle );
        $I->fillField( ConstantsPage :: $ticketTitle, ConstantsPage :: $ticketTitleStr );

        $I->selectOption( ConstantsPage :: $selectProduct, ConstantsPage :: $selectProductValue );
        $I->scrollTo( ConstantsPage :: $ticketDescription );
        $I->seeElement( ConstantsPage :: $ticketDescription );
        $I->fillField( ConstantsPage :: $ticketDescription, ConstantsPage :: $ticketDescriptionStr);
        $I->seeElement( ConstantsPage :: $submitForm );
        $I->click( ConstantsPage :: $submitForm );
        echo "..........Ticket Submitted..........";
    }
}

?>