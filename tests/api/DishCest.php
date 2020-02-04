<?php 

class DishCest
{
    public function _before(ApiTester $I)
    {
       $I->haveHttpHeader('accept', 'application/json');
       $I->haveHttpHeader('Current-type', 'application/vnd.api+json'); 
       $I->sendGET('/posts', [ 'status' => 'pending' ]);
       $I->seeResponseCodeIs(200);
       $I->seeResponseIsJson();
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }
}
