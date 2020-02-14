<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaPhotoTaggingCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

       $I->amOnPage( '/wp-admin/plugins.php?plugin_status=all' );

       $I->moveMouseOver('li#wp-admin-bar-my-account');
       $I->wait(2);

       $I->click('li#wp-admin-bar-my-account-media a');
       $I->scrollTo(['css' => '.rtmedia-container ']);

       $I->seeElement('#rtm_show_upload_ui');
      $I->click('#rtm_show_upload_ui');

      $I->seeElement('.rtm-album-privacy');
      $I->selectOption('select.rtmedia-user-album-list', '329');
      echo "..........Album Selected..........";

      $I->seeElement('#rtSelectPrivacy');
      $I->selectOption('select#rtSelectPrivacy', '40');
      echo "..........Privacy Selected..........";
      
      $I->attachFile( ConstantsPage::$uploadFile, ConstantsPage::$imageName );

      $I->seeElement( ConstantsPage :: $uploadTermsCheckbox );
      $I->click( ConstantsPage :: $uploadTermsCheckbox );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $startUpload );
      $I->click( ConstantsPage :: $startUpload );
      $I->wait(3);

      $I->seeElement('.rtmedia-item-thumbnail');
      $I->clickWithRightButton('.rtmedia-item-thumbnail');
      $I->wait(2);

      $I->switchToNextTab();

      $I->scrollTo('#rtmedia-tag-form');
      $I->seeElement('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');
      $I->click('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');

      $I->click('#rtmedia-tag-form');
      $I->seeElement('#bp-media-tag-input');
      $I->fillField('#bp-media-tag-input', 'user');
      $I->wait(2);

      $I->seeElement('#ui-id-3 > a > span');
      $I->click('#ui-id-3 > a > span');
      $I->wait(2);

      $I->seeElement('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
      $I->click('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
      $I->wait(2);
      
      $I->closeTab();

      $logout = new LogoutPage( $I );
      $logout->logout();


    }

}

?>