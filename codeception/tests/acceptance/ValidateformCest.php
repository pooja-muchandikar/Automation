<?php

class ValidateformCest
{
    public function frontpageworks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement('#header-menu');
        $I->scrollTo('#gform_wrapper_69');
        $I->seeElement('#input_69_1');
        $I->fillField('#input_69_1', 'pooja.muchandikar@rtcamp.com');
        $I->seeElement('#gform_submit_button_69');
        $I->click('#gform_submit_button_69');
        echo ".......Validation done.....";


    }
}

?>




