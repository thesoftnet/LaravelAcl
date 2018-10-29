<?php  namespace TheSoftNet\LaravelAcl\Authentication\Tests\Unit;

/**
 * Test EditableSubscriberTest
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
use TheSoftNet\LaravelAcl\Authentication\Events\EditableSubscriber;

class EditableSubscriberTest extends TestCase {

    /**
     * @test
     **/
    public function it_check_if_is_editable()
    {
        $model = new \StdClass;
        $model->protected = false;

        $sub = new EditableSubscriber();
        $sub->isEditable($model);
    }

    /**
     * @test
     * @expectedException \TheSoftNet\LaravelAcl\Authentication\Exceptions\PermissionException
     **/
    public function it_check_if_es_editable_and_throw_new_exception()
    {
        $model = new \StdClass;
        $model->protected = true;

        $sub = new EditableSubscriber();
        $sub->isEditable($model);
    }
}
 