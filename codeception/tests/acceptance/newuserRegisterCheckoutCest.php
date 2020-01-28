<?php

class newuserRegisterCheckoutCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        // $I->seeElement('.wp-block-image');
        // $I->seeElement('.wp-image-85666');
        // $I->click('.wp-image-85666');

        $I->seeElement('#menu-item-149021');
        $I->click('#menu-item-149021');

        $I->scrollTo('.edd_purchase_submit_wrapper');

        $I->seeElement('#edd_purchase_85270');
        $I->click('#edd_purchase_85270');

        $I->seeElement('.edd_purchase_submit_wrapper');
        $I->click('.edd_purchase_submit_wrapper');

        echo "..........CHECKOUT PAGE.........";
        $I->amOnPage('/checkout');


    
    }
}

?>