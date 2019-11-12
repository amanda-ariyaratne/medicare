<?php 

class GoToHomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function visitHome(AcceptanceTester $I)
    {
        $I->amOnPage('/home');
        $I->see('Login');
    }
}
