<?php
namespace Page;
use Page\Constants as ConstantsPage;
use \Codeception\Step\Argument\PasswordArgument;
class Login1 {
	protected $tester;
	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
	}
	public function loginAsAdmin( $saveSession = true ) {
		$I = $this->tester;
		$I->amOnPage( '/wp-admin' );
		$I->wait(5);
		// Will load the session saved in saveSessionSnapshot().
		if ( $I->loadSessionSnapshot( 'login' ) ) {
			echo nl2br( " skipping login steps... \n" );
			return;
		}
		if ( ! $saveSession ) {
			$I->waitForElement( ConstantsPage::$wpSubmitButton1, 10 );
		}
		$I->seeElement( ConstantsPage::$wpUserNameField1 );
		$I->fillfield( ConstantsPage::$wpUserNameField1, ConstantsPage::$userName1 );
		$I->seeElement( ConstantsPage::$wpPasswordField1 );
		// $I->fillfield( ConstantsPage::$wpPasswordField, $wpPassword );
		$I->fillField( ConstantsPage::$wpPasswordField1, new PasswordArgument(ConstantsPage::$password1));
		$I->click( ConstantsPage::$wpSubmitButton1 );
		// $I->wait(5);
		// // $I->waitForElement( ConstantsPage::$wpDashboard, 20 );
		// $I->waitForElement( ConstantsPage::$dashBoardMenu, 20 );
		// Will Save the Session
		if ( $saveSession ) {
			$I->saveSessionSnapshot( 'login' );
			echo nl2br( "Session Saved! \n" );
		} else {
			echo nl2br( "Session Not Saved! \n" );
		}
		$I->reloadPage();
		#$I->maximizeWindow();
	}
}