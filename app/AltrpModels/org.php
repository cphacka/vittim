<?php

namespace App\AltrpModels;

use Illuminate\Database\Eloquent\Model as Model;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class org extends Model
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'orgs';

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
    protected $fillable = ['name','description','media_id','org_branch_id'];

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
    public function pilot_project()
    {
        return $this->hasMany('App\AltrpModels\pilot_project', 'org_id', 'id');
    }

    public function org_team()
    {
        return $this->hasMany('App\AltrpModels\org_team', 'org_id', 'id');
    }

    public function favorite()
    {
        return $this->hasMany('App\AltrpModels\favorite', 'org_id', 'id');
    }

    public function media_alt()
    {
        return $this->belongsTo('App\AltrpModels\media_alt', 'media_id', 'id');
    }

    public function startup()
    {
        return $this->hasMany('App\AltrpModels\startup', 'organization_of_interesting', 'id');
    }

    public function org_branch()
    {
        return $this->belongsTo('App\AltrpModels\org_branch', 'org_branch_id', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
