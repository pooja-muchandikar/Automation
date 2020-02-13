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

      

    }

}

?>