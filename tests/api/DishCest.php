<?php 

class DishCest
{
    public function _before(ApiTester $I)
    {

    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->haveHttpHeader('Current-type', 'application/vnd.api+json'); 
        $I->sendGET('/posts', [ 'status' => 'pending' ]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}
