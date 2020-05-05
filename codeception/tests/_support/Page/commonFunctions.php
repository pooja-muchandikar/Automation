<?php
namespace Page;

use Page\Constants as ConstantsPage;

class commonFunctions {
    protected $tester;
	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
    }

    public function verifyMessage() {

        $I = $this->tester;


        
    }

    public function verifyStatus() {

		$I = $this->tester;

		
    }
    
    public function validEmail() {

		$I = $this->tester;

		
		
	}



}