<?php 

class RestaurantCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->haveHttpHeader('api_key', 'special-key');
        $I->haveHttpHeader('Current-Type', 'application/vnd.api+json');
        $I->sendGET('/restaurant', [ 'status' => 'pending' ]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        codecept_debug($I);
    }
}
