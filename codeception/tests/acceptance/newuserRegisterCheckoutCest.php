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


        $I->seeElement('#edd_purchase_116837');
        $I->click('#edd_purchase_116837');
        $I->seeElement('.edd_purchase_submit_wrapper ');
        $I->click('.edd_purchase_submit_wrapper ');

        // $I->scrollTo('.edd_purchase_submit_wrapper');

        // $I->seeElement('#edd_purchase_85270');
        // $I->click('#edd_purchase_85270');

        // $I->seeElement('.edd_purchase_submit_wrapper');
        // $I->click('.edd_purchase_submit_wrapper');

        // echo "..........CHECKOUT PAGE.........";
        $I->wait(2);

        $I->amOnPage('/checkout');

        $I->seeElement('#edd-email');
        $I->fillField('#edd-email', 'poojatest@rtcamp.com');

        $I->seeElement('#edd-first');
        $I->fillField('#edd-first', 'pooja');

        $I->seeElement('#edd-last');
        $I->fillField('#edd-last', 'm');

        $I->seeElement('#edd_user_login');
        $I->fillField('#edd_user_login', 'poojatest');

        $I->seeElement('#edd_user_pass');
        $I->fillField('#edd_user_pass', 'password');

        $I->seeElement('#edd_user_pass_confirm');
        $I->fillField('#edd_user_pass_confirm', 'password');

        $I->click('#edd_show_terms');

        $I->wait(2);

        $I->seeElement('#edd_agree_to_terms');
        $I->click('#edd_agree_to_terms');

        $I->seeElement('#edd-purchase-button');
        $I->click('#edd-purchase-button');

        echo "..........Purchase History Page..........";

        $I->wait(2);

        
  
    }
}

?>