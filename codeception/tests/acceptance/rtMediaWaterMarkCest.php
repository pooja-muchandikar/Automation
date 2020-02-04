<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaWaterMarkCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( ConstantsPage :: $rtMediaSettingsUrl );
      $I->seeElement('#tab-rtmedia-watermark');
      $I->click('#tab-rtmedia-watermark');

      $I->seeElement('#rtm-form-text-4');
      $I->fillField('#rtm-form-text-4', 'Watermark test case');

      $I->selectOption('select#rtSelect0', 'Cutive Mono');
      $I->wait(2);



    }

}
?>