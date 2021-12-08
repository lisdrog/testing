<?php

class SecondCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('//a[@href="/lk/"]');
        $I->see('Личный кабинет');
        $I->fillField("login","proverka");
        $I->fillField("passwd","123456789");
        $I->click('Вход');
        $I->see('Сидоров Иван Иванович, здравствуйте!');
        $I->click('Личные данные');
        $I->see('Сидоров Иван Иванович');

    }
}
