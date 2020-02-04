<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaDefaultAlbumCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( ConstantsPage :: $rtMediaSettingsUrl );
      $I->seeElement('#tab-rtmedia-global-albums');
      $I->click('#tab-rtmedia-global-albums');
      $I->wait(2);

      $I->scrollTo('.rtm-option-wrapper');
      $I->wait(2);
      $I->seeElement('#rtm_new_global_album');
      $I->fillField('#rtm_new_global_album', 'MyAlbum');
      $I->wait(2);
      $I->click('input[name="rtmedia-options[add_new_global_album]"]');
      $I->wait(2);

      echo "..........Delete Album..........";
      $I->seeElement('.rtm-delete-td');
      $I->seeElement('#delete_global_album_496');
      $I->click('.delete-label');




    }

}
?>