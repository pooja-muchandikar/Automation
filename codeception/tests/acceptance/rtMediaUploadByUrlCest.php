<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaUploadByUrlCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( '/wp-admin/plugins.php?plugin_status=all' );

      $I->scrollTo('.row-actions.visible');
      $I->wait(2);
      echo "..........Plugin is Active..........";

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

      //URL IMPORT TEST

      $I->seeElement('.rtm-uploader-tabs');
      $I->wait(2);
      $I->seeElement('.rtm-url-import-tab');
      $I->click('.rtm-url-import-tab');

      $I->seeElement('#rtmedia_url_upload_input');
      $I->fillField( '#rtmedia_url_upload_input', ConstantsPage :: $uploadFile );

      $I->seeElement( ConstantsPage :: $uploadTermsCheckbox );
      $I->click( ConstantsPage :: $uploadTermsCheckbox );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $startUpload );
      $I->click( ConstantsPage :: $startUpload );
      $I->wait(2);
      echo "..........URL Import Done Successfully On Media Page!!!..........";

      $I->amOnPage('/members/pooja/media/');

    }

}

?>