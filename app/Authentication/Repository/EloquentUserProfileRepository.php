<?php  namespace TheSoftNet\LaravelAcl\Authentication\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use TheSoftNet\LaravelAcl\Authentication\Classes\Images\ImageHelperTrait;
use TheSoftNet\LaravelAcl\Authentication\Exceptions\UserNotFoundException;
use TheSoftNet\LaravelAcl\Authentication\Exceptions\ProfileNotFoundException;
use TheSoftNet\LaravelAcl\Authentication\Models\User;
use TheSoftNet\LaravelAcl\Authentication\Models\UserProfile;
use TheSoftNet\LaravelAcl\Authentication\Repository\Interfaces\UserProfileRepositoryInterface;
use TheSoftNet\LaravelAcl\Library\Repository\EloquentBaseRepository;
use TheSoftNet\LaravelAcl\Library\Repository\Interfaces\BaseRepositoryInterface;

/**
 * Class EloquentUserProfileRepository
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class EloquentUserProfileRepository extends EloquentBaseRepository implements UserProfileRepositoryInterface
{
    use ImageHelperTrait;

    /**
     * We use the user profile as a model
     */
    public function __construct()
    {
        return parent::__construct(new UserProfile);
    }

    public function getFromUserId($user_id)
    {
        // checks if the user exists
        try {
            User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            throw new UserNotFoundException;
        }
        // gets the profile
        $profile = $this->model->where('user_id', '=', $user_id)
            ->get();

        // check if the profile exists
        if ($profile->isEmpty()) throw new ProfileNotFoundException;

        return $profile->first();
    }

    public function updateAvatar($id, $input_name = "avatar")
    {
        $model = $this->find($id);
        $model->update([
            "avatar" => static::getBinaryData('170', $input_name)
        ]);
    }

    public function attachEmptyProfile($user)
    {
        if($this->hasAlreadyAnUserProfile($user)) return;

        return $this->create(["user_id" => $user->id]);
    }

    /**
     * @param $user
     * @return mixed
     */
    protected function hasAlreadyAnUserProfile($user) {
        return $user->user_profile()->count();
    }
}