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

        $I->amOnPage('/support');
        $I->seeElement('#title');
        $I->fillField('#title', 'Test ticket');
        #$I->seeElement('#rthd-product-id');
        $I->selectOption('select#rthd-product-id', '48246');
        $I->scrollTo('#post_description_body');
        $I->seeElement('#post_description_body');
        $I->fillField('#post_description_body', 'Lorem Ipsum test ticket desctiption');
        $I->seeElement('#submit-support-form');
        $I->click('#submit-support-form');
        echo "..........Ticket Submitted..........";
    }
}

?>