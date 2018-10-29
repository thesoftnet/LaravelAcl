<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit;
use TheSoftNet\LaravelAcl\Authentication\Classes\CustomProfile\Events\ProfilePermissionSubscriber;
use Mockery as m;
use App;
/**
 * Test ProfilePermissionSubscriberTest
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class ProfilePermissionSubscriberTest extends TestCase {

    public function tearDown()
    {
        m::close();
    }

    /**
     * @test
     **/
    public function checkIfHasProfileTypePermission()
    {
        $has_edit_profile_permssion = m::mock('StdClass')
                ->shouldReceive('checkCustomProfileEditPermission')
                ->andReturn(true)
                ->getMock();
        App::instance('authentication_helper', $has_edit_profile_permssion);

        $subscriber = new ProfilePermissionSubscriber();
        $subscriber->checkProfileTypePermission();
    }

    /**
     * @test
     * @expectedException \TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException
     **/
    public function throwsExceptionIfTypePermissionFails()
    {
        $subscriber = new ProfilePermissionSubscriber();

        $subscriber->checkProfileTypePermission();
    }

}
 