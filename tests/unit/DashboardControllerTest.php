<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit;

use TheSoftNet\LaravelAcl\Authentication\Models\User;
use TheSoftNet\LaravelAcl\Authentication\Tests\Unit\Traits\AuthHelper;
use TheSoftNet\LaravelAcl\Authentication\Tests\Unit\Traits\Helper;
use Mockery as m;
use App;

class DashboardControllerTest extends DbTestCase  {
    use AuthHelper;

    public function setUp()
    {
        parent::setUp();
        $this->initializeUserHasher();
    }

    public function tearDown()
    {
        m::close();
    }

    /**
     * @test
     **/
    public function canShowDashboardPage()
    {
        $this->loginAnUser();

        $response = $this->get(route('dashboard.default'));

        $response->assertStatus(200);
    }
}
 
