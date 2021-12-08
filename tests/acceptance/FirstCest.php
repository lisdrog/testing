<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/corporate/');
        $I->see('Салаты и холодные закуски');
        $I->see('Первые блюда');
        $I->see('Постные блюда');
        $I->see('Мучные блюда');
        $I->see('Комплексные обеды');
        $I->see('Посуда');
        $I->see('Меню');

    }
}
