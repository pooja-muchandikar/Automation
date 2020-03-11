<?php
namespace Page;

use Page\Constants as ConstantsPage;

class eddFields {
    protected $tester;
	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
    }

    public function eddVariables() {

        $I = $this->tester;

        $I->waitForElementVisible( ConstantsPage :: $eddTerms, 20 );
        $I->wait(2);
        $I->click(ConstantsPage :: $eddTerms );

        $I->waitForElementVisible( ConstantsPage :: $eddPurchaseButton, 20 );
        $I->click( ConstantsPage :: $eddPurchaseButton );
    }


}
