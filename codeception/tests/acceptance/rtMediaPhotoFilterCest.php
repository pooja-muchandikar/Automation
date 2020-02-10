<?php


use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaFilterCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      echo "..Apply Photo Filters to the Media..";

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver('li#wp-admin-bar-my-account');
      $I->wait(2);
      $I->click('li#wp-admin-bar-my-account-media a');
      $I->scrollTo(['css' => '.rtmedia-container ']);
      $I->wait(2);

      $I->seeElement('.rtmedia-item-thumbnail');
      $I->click('.rtmedia-item-thumbnail');
      $I->wait(2);

      $I->scrollTo('.button.rtmedia-edit.rtmedia-action-buttons.button');
      $I->click('.button.rtmedia-edit.rtmedia-action-buttons.button');
      $I->wait(2);

      $I->scrollTo('.rtmedia-instagram-effects');
      $I->wait(2);
      $I->amOnPage('/members/pooja/media/503/edit/?#instagram-effects-tab');
      $I->wait(2);

      $I->seeElement('#toaster');
      $I->click('input[id="toaster"]');

      $I->click('input[class="input.button.rtm-button.rtm-button-save"]');
      


    }

}

?>