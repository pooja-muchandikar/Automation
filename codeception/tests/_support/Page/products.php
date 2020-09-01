<?php
namespace Page;

use Page\Constants as ConstantsPage;

class products {
    protected $tester;
	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
    }

    //Will check if product is available
    public function productsList( $product, $productAvailable = 'no' ) {

        $I = $this->tester;

        if ( 'no' != $productAvailable ) {

            $I->scrollTo( $scrollPosition );
            $I->waitForElementVisible( ContantsPage :: $brandAbsoluteNutritionsubMenuItem, 20 );
            $I->click( ContantsPage :: $brandAbsoluteNutritionsubMenuItem );
		}

    
    }


}
