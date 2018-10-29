<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit;

use TheSoftNet\LaravelAcl\Authentication\Commands\InstallCommand;
use Mockery as m;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Test AuthenticatorInstallCommandTest
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class InstallCommandTest extends TestCase {

    public function tearDown()
    {
        m::close();
    }

    /**
     * @test
     **/
    public function it_calls_migration_and_publish_config()
    {
        $mock_call = m::mock('StdClass')
                      ->shouldReceive('call')
                      ->once()
                      ->with('vendor:publish', ['force'])
                      ->shouldReceive('call')
                      ->once()
                      ->with('migrate')
                      ->getMock();

        $mock_seeder = m::mock('TheSoftNet\LaravelAcl\Database\DbSeeder')
                        ->shouldReceive('run')
                        ->once()
                        ->getMock();

        $installCommand = new InstallCommand($mock_call, $mock_seeder);
        $installCommand->setLaravel($this->app);
        $command = new CommandTester($installCommand);
        $command->execute([]);

        $this->assertEquals("## Laravel Authentication ACL Installed successfully ##\n", $command->getDisplay());
    }
}
 