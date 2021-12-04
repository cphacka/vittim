<?php

namespace App\AltrpModels;

use Illuminate\Database\Eloquent\Model as Model;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class pilot_project extends Model
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'pilot_projects';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['startup_id','name','count_team','contact_id','status_ready_id','org_id','hash'];

    /**
     * Relations that should be always with.
     *
     * @var array
     */
    protected $altrp_with = [];

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    // ACCESSORS - IMPORTANT: Don't remove this comment!
    
    // ACCESSORS - IMPORTANT: Don't remove this comment!

    // RELATIONSHIPS
    public function startup()
    {
        return $this->belongsTo('App\AltrpModels\startup', 'startup_id', 'id');
    }

    public function pilot_stage()
    {
        return $this->hasMany('App\AltrpModels\pilot_stage', 'pilot_id', 'id');
    }

    public function pilot_effect()
    {
        return $this->hasMany('App\AltrpModels\pilot_effect', 'pilot_id', 'id');
    }

    public function pilot_team()
    {
        return $this->hasMany('App\AltrpModels\pilot_team', 'pilot_id', 'id');
    }

    public function pilot_gallery()
    {
        return $this->hasMany('App\AltrpModels\pilot_gallery', 'pilot_project_id', 'id');
    }

    public function comment_pilot()
    {
        return $this->hasMany('App\AltrpModels\comment_pilot', 'pilot_project_id', 'id');
    }

    public function pilot_identification()
    {
        return $this->hasMany('App\AltrpModels\pilot_identification', 'pilot_project_id', 'id');
    }

    public function org()
    {
        return $this->belongsTo('App\AltrpModels\org', 'org_id', 'id');
    }

    public function contact()
    {
        return $this->belongsTo('App\AltrpModels\contact', 'contact_id', 'id');
    }

    public function status_ready()
    {
        return $this->belongsTo('App\AltrpModels\status_ready', 'status_ready_id', 'id');
    }

    public function pilot_status()
    {
        return $this->hasMany('App\AltrpModels\pilot_status', 'pilot_project_id', 'id');
    }

    public function pilot_budget()
    {
        return $this->hasMany('App\AltrpModels\pilot_budget', 'pilot_id', 'id');
    }

    public function pilot_meeting()
    {
        return $this->hasMany('App\AltrpModels\pilot_meeting', 'pilot_project_id', 'id');
    }

    public function pilot_event()
    {
        return $this->hasMany('App\AltrpModels\pilot_event', 'pilot_id', 'id');
    }

    public function pilot_file()
    {
        return $this->hasMany('App\AltrpModels\pilot_file', 'pilot_project_id', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
