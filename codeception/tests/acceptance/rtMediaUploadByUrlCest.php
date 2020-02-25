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

      $I->scrollTo( ConstantsPage :: $rowVisible );
      $I->wait(2);
      echo "..........Plugin is Active..........";

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollContainer );

      $I->seeElement( ConstantsPage :: $uploadUI );
      $I->click( ConstantsPage :: $uploadUI );

      $I->seeElement( ConstantsPage :: $privacyElement );
      $I->selectOption('select.rtmedia-user-album-list', '329');
      echo "..........Album Selected..........";

      $I->seeElement( ConstantsPage :: $privacy );
      $I->selectOption('select#rtSelectPrivacy', '40');
      echo "..........Privacy Selected..........";

      //URL IMPORT TEST

      $I->seeElement( ConstantsPage :: $uploadTabs );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $urlTab );
      $I->click( ConstantsPage :: $urlTab );

      $I->seeElement( ConstantsPage :: $urlinputField );
      $I->fillField( ConstantsPage :: $urlinputField , ConstantsPage :: $uploadFile2 );

      $I->seeElement( ConstantsPage :: $uploadTermsCheckbox );
      $I->click( ConstantsPage :: $uploadTermsCheckbox );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $startUpload );
      $I->click( ConstantsPage :: $startUpload );
      $I->wait(2);
      echo "..........URL Import Done Successfully On Media Page!!!..........";

      $I->amOnPage('/members/pooja/media/');

      $logout = new LogoutPage( $I );
      $logout->logout();

    }

}

?>