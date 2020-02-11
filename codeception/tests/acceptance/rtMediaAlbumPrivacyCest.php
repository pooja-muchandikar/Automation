<?php


use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaAlbumPrivacyCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      echo "...Album Privacy...";

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver('li#wp-admin-bar-my-account');
      $I->wait(2);
      $I->click('li#wp-admin-bar-my-account-media a');
      $I->scrollTo(['css' => '.rtmedia-container ']);
      $I->wait(2);

      $I->seeElement('#rtm-media-options-list');
      $I->click('#rtm-media-options-list');
      $I->seeElement('.rtmedia-reveal-modal.rtmedia-modal-link');
      $I->click('.rtmedia-reveal-modal.rtmedia-modal-link');

      $I->seeElement('#rtmedia_album_name');
      $I->fillField('#rtmedia_album_name', 'album privacy test');

      $I->seeElement('#rtmedia_album_description');
      $I->fillField('#rtmedia_album_description', 'Lorem Ipsum this is just for testing');

      $I->seeElement('#rtmedia_select_album_privacy');
      $I->selectOption('select#rtmedia_select_album_privacy', '60');

      $I->seeElement('#rtmedia_create_new_album');
      $I->click('#rtmedia_create_new_album');

      $I->click('button.mfp-close');
      $I->wait(2);

      echo ".....Album Privacy Set.....";

      //Edit Media Privacy

      $I->seeElement('.rtmedia-list-item-a');
      $I->click('.rtmedia-list-item-a');

      $I->scrollTo('#rtm-media-options-list');
      $I->wait(2);
      $I->click('.button.rtmedia-edit.rtmedia-action-buttons.button');
      $I->wait(2);

      $I->scrollTo('.rtmedia-container.rtmedia-single-container.rtmedia-media-edit');
      $I->seeElement('#rtSelect0');
      $I->selectOption('#rtSelect0', '40');
      $I->click('input.button.rtm-button.rtm-button-save');
      $I->wait(2);

      echo ".....Media Privacy Edited successfully.....";

      //Edit album privacy

      $I->seeElement('#rtmedia-nav-item-albums');
      $I->click('#rtmedia-nav-item-albums');

      $I->seeElement('.rtmedia-item-thumbnail');
      $I->click('.rtmedia-item-thumbnail');

      $I->seeElement('#rtm-media-options-list');
      $I->click('#rtm-media-options-list');

      $I->seeElement('.rtmedia-edit a');
      $I->click('.rtmedia-edit a');

      $I->scrollTo('.rtmedia-container.rtmedia-single-container.rtmedia-media-edit');





    }
}

?>