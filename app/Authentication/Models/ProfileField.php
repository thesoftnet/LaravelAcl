<?php  namespace TheSoftNet\LaravelAcl\Authentication\Models;

/**
 * Class ProfileType
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
class ProfileField extends BaseModel
{
    protected $table = "profile_field";

    protected $fillable = ["value", "profile_id", "profile_field_type_id"];

    public function profile_field_type()
    {
        return $this->belongsTo('TheSoftNet\LaravelAcl\Authentication\Models\ProfileFieldType','profile_field_type_id');
    }

    public function user_profile()
    {
        return $this->belongsTo('TheSoftNet\LaravelAcl\Authentication\Models\UserProfile','user_profile_id');
    }
} 