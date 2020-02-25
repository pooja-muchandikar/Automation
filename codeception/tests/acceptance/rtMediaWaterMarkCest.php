<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaWaterMarkCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      echo "...Watermark Setting and Upload image to check if watermark got applied...";
      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( ConstantsPage :: $rtMediaSettingsUrl );
      $I->seeElement('#tab-rtmedia-watermark');
      $I->click('#tab-rtmedia-watermark');

      $I->seeElement('#rtm-form-text-4');
      $I->fillField('#rtm-form-text-4', 'Watermark test case');

      $I->selectOption('select#rtSelect0', 'Cutive Mono');
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $saveSettingsButtonBottom );
      $I->click( ConstantsPage :: $saveSettingsButtonBottom );
      $I->wait(2);

      $I->moveMouseOver('li#wp-admin-bar-my-account');
      $I->wait(2);
      $I->click('li#wp-admin-bar-my-account-media a');
      $I->scrollTo(['css' => '.rtmedia-container ']);

      $I->seeElement( ConstantsPage :: $uploadUI );
      $I->click('.rtmedia-upload-media-link');

      $I->seeElement('.rtmedia-user-album-list');
      $I->selectOption('select.rtmedia-user-album-list', 'testone2');

      $I->seeElement( ConstantsPage :: $privacy );
      $I->selectOption('select#rtSelectPrivacy', '60');

      $I->seeElement( ConstantsPage :: $uploadButton );
      $I->wait(2);
      $I->attachFile( ConstantsPage::$uploadFile, ConstantsPage::$imageName );
      $I->wait(2);
      $I->waitForElement( ConstantsPage::$fileList, 20 );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $uploadTermsCheckbox );
      $I->click( ConstantsPage :: $uploadTermsCheckbox );
      $I->wait(2);

      $I->seeElement( ConstantsPage:: $startUpload );
      $I->click( ConstantsPage:: $startUpload );
      $I->wait(2);
      $I->seeElement('.rtmedia-item-thumbnail');
      $I->click('.rtmedia-item-thumbnail');
      $I->wait(2);
      $I->click('.rtmedia-container.rtmedia-single-container span.rtm-mfp-close');
      $I->wait(2);
      echo "...WaterMarking Done Successfully!!!...";

      //Check Watermark Update for Existing Images...

      $I->amOnPage( ConstantsPage :: $rtMediaSettingsUrl );
      $I->seeElement('#tab-rtmedia-watermark');
      $I->click('#tab-rtmedia-watermark');
      $I->wait(2);

      $I->scrollTo('.rtm-message.rtm-notice');
      $I->wait(2);
      $I->amOnPage('/wp-admin/admin.php?page=rtmedia-manage-watermark');
      $I->wait(2);
      $I->seeElement('#submit');
      $I->click('#submit');
      $I->wait(2);

      echo "......Watermarking done for existing images!!!!!.......";

    }

}
?>