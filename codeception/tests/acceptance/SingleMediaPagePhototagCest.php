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
    //   $I->moveMouseOver('.rtmedia-item-thumbnail');
    //   $I->seeElement('.rtmedia-gallery-item-actions');
    //   $I->click('.no-popup');
      $I->wait(2);

    //   $I->scrollTo('')

    

    }

}

?>