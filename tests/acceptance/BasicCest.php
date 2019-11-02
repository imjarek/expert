<?php 

class BasicCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeInTitle('Эксперт');
    }

    public function canLogin(AcceptanceTester $I)
    {
        $I->amOnPage('/panel/login');
        $I->fillField('email', 'mail@mail.com');
        $I->fillField('password', 'qwerty');
        $I->click('Войти');
        $I->see('Данные не верны');
    }
}