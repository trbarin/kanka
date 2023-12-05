<?php

namespace App\Models;

use App\Facades\Img;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property string $code
 * @property string $name
 * @property float $monthly
 * @property float $yearly
 */
class Tier extends Model
{
    public $fillable = [
        'name',
        'monthly',
        'yearly',
        'position',
    ];

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('position');
    }

    public function isFree(): bool
    {
        return empty($this->monthly);
    }
    public function isPopular(): bool
    {
        return $this->name === 'Owlbear';
    }

    public function isBestValue(): bool
    {
        return $this->name === 'Wyvern';
    }

    public function image(): string
    {
        return match ($this->name) {
            'Owlbear' => 'https://th.kanka.io/s17BtlhzUJp4h07gxtzmljKO3fU=/60x60/smart/src/app/tiers/owlbear-750.png',
            'Wyvern' => 'https://th.kanka.io/rJBeW_Poe2uvjdo44f2yzDnofzo=/60x60/smart/src/app/tiers/wyvern-750.png',
            'Elemental' => 'https://th.kanka.io/Wira7yc1p1cAa_GUwC0SGDOuSwg=/60x60/smart/src/app/tiers/elemental-750.png',
            default => 'https://th.kanka.io/Xy0Dm1dMld_NUYYA2gJdTkKnqjE=/60x60/smart/src/app/tiers/kobold-750.png'
        };
        $url = '';
        return Img::crop(60)->url('tiers/' . strtolower($this->code) . '-750.png');
    }

    public function isCurrent(User $user): bool
    {
        if ($this->name === 'Owlbear' && $user->isOwlbear()) {
            return true;
        } elseif ($this->name === 'Wyvern' && $user->isWyvern()) {
            return true;
        } elseif ($this->name === 'Elemental' && $user->isElemental()) {
            return true;
        }
        return false;
    }

    public function isSubscribed(User $user): bool
    {

    }
    public function monthlyPlans(): array
    {
        return [
            config('subscription.' . $this->code . '.eur.monthly'),
            config('subscription.' . $this->code . '.usd.monthly')
        ];
    }
    public function yearlyPlans(): array
    {
        return [
            config('subscription.' . $this->code . '.eur.yearly'),
            config('subscription.' . $this->code . '.usd.yearly')
        ];
    }
    public function plans(): array
    {
        return [
            config('subscription.' . $this->code . '.eur.monthly'),
            config('subscription.' . $this->code . '.usd.monthly'),
            config('subscription.' . $this->code . '.eur.yearly'),
            config('subscription.' . $this->code . '.usd.yearly'),
        ];
    }
}
