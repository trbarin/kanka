<?php

namespace App\Models;

use App\Models\Concerns\Acl;
use App\Models\Concerns\HasCampaign;
use App\Models\Concerns\HasEntry;
use App\Models\Concerns\HasFilters;
use App\Models\Concerns\HasLocations;
use App\Models\Concerns\Nested;
use App\Models\Concerns\Sanitizable;
use App\Models\Concerns\SortableTrait;
use App\Traits\ExportableTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

/**
 * Class Race
 * @package App\Models
 *
 * @property Race[]|Collection $descendants
 *
 * @property int|null $race_id
 * @property Collection|CharacterRace[] $characterRaces
 */
class Race extends MiscModel
{
    use Acl;
    use ExportableTrait;
    use HasCampaign;
    use HasEntry;
    use HasFactory;
    use HasFilters;
    use HasLocations;
    use HasRecursiveRelationships;
    use Nested;
    use Sanitizable;
    use SoftDeletes;
    use SortableTrait;

    protected $fillable = [
        'name',
        'campaign_id',
        'type',
        'entry',
        'is_private',
        'race_id',
    ];

    /**
     * Entity type
     */
    protected string $entityType = 'race';

    protected array $sortable = [
        'name',
        'type',
        'parent.name',
    ];

    /**
     * Nullable values (foreign keys)
     * @var string[]
     */
    public array $nullableForeignKeys = [
        'race_id',
    ];

    /**
     * Foreign relations to add to export
     */
    protected array $foreignExport = [
        'pivotLocations',
    ];

    protected array $sanitizable = [
        'name',
        'type',
    ];

    protected string $locationPivot = 'race_location';
    protected string $locationPivotKey = 'race_id';

    /**
     * @return string
     */
    public function getParentKeyName()
    {
        return 'race_id';
    }

    /**
     * Performance with for datagrids
     */
    public function scopePreparedWith(Builder $query): Builder
    {
        return $query->with([
            'entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id', 'image_path', 'image_uuid', 'focus_x', 'focus_y');
            },
            'entity.image' => function ($sub) {
                $sub->select('campaign_id', 'id', 'ext', 'focus_x', 'focus_y');
            },
            'parent' => function ($sub) {
                $sub->select('id', 'name');
            },
            'parent.entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id');
            },
            'locations' => function ($sub) {
                $sub->select('locations.id', 'locations.name');
            },
            'characters',
            'children' => function ($sub) {
                $sub->select('id', 'race_id');
            },
        ]);
    }

    /**
     * Only select used fields in datagrids
     */
    public function datagridSelectFields(): array
    {
        return ['race_id'];
    }

    /**
     * Characters belonging to this race
     */
    public function characters(): BelongsToMany
    {
        $query = $this->belongsToMany('App\Models\Character', 'character_race');
        if (auth()->guest() || !auth()->user()->isAdmin()) {
            $query->wherePivot('is_private', false);
        }
        return $query;
    }

    public function characterRaces(): HasMany
    {
        return $this->hasMany(CharacterRace::class, 'race_id')
            ->with(['character', 'character.entity']);
    }

    /**
     * Get all characters in the race and descendants
     */
    public function allCharacters()
    {
        $raceIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $raceIds[] = $descendant->id;
        }


        $query = Character::select('characters.*')
            ->distinct('characters.id')
            ->leftJoin('character_race as cr', function ($join) {
                $join->on('cr.character_id', '=', 'characters.id');
            })
            ->whereIn('cr.race_id', $raceIds);

        if (auth()->guest() || !auth()->user()->isAdmin()) {
            $query->where('cr.is_private', false);
        }
        return $query;
    }

    /**
     * Get all characters in the race and descendants
     */
    public function allCharacterRaces()
    {
        $raceIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $raceIds[] = $descendant->id;
        };
        $model = new CharacterRace();
        return CharacterRace::groupBy('character_id')
            ->distinct('character_id')
            ->whereIn($model->getTable() . '.race_id', $raceIds)->with('character');
    }

    /**
     * Get the entity_type id from the entity_types table
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.race');
    }

    /**
     * Define the fields unique to this model that can be used on filters
     * @return string[]
     */
    public function filterableColumns(): array
    {
        return [
            'race_id',
            'location_id',
            'parent'
        ];
    }

    public function pivotLocations(): HasMany
    {
        return $this->hasMany('App\Models\RaceLocation');
    }

    /**
     * Determine if the model has profile data to be displayed
     */
    public function showProfileInfo(): bool
    {
        if ($this->locations->isNotEmpty()) {
            return true;
        }

        return parent::showProfileInfo();
    }

    /**
     * Detach children when moving this entity from one campaign to another
     */
    public function detach(): void
    {
        // Pivot tables can be deleted directly
        $this->characters()->detach();
        $this->locations()->detach();
    }
}
