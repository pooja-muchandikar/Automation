<?php 

use Page\Constants as ConstantsPage;

class checkoutCest
{
    public function store(AcceptanceTester $I)  
    {
    
        $I->wantTo('add a plugin to the cart and check it gets added');
        $I->amOnPage( '/' );

        //$I->seeElement( ConstantsPage :: $menuItem );
        $I->waitForElementVisible( ConstantsPage :: $menuItem, 20 );
        $I->moveMouseOver( ConstantsPage :: $menuItem );
        $I->wait( 10 );

        $I->waitForElementVisible( ConstantsPage :: $brandAbsoluteNutritionsubMenuItem, 20 );
        $I->click( ConstantsPage :: $brandAbsoluteNutritionsubMenuItem );
        
        $I->scrollTo( ConstantsPage :: $scrollToImage );

        $I->waitForElementVisible( ConstantsPage :: $selectProduct, 20 );
        $I->click( ConstantsPage :: $selectProduct );


        



    }   

    
}
