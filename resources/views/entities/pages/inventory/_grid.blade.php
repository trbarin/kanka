@php  /** @var \App\Models\Entity $entity
 * @var \App\Models\Inventory $item */
 $previousPosition = null; $posCount = 0;
@endphp
<div class="flex flex-col gap-4">
    @foreach ($entity->orderedInventory() as $position => $items)
        <div class="flex flex-col gap-4" data-position="{{ \Illuminate\Support\Str::slug($position) }}">
            <div class="section-title flex gap-4 items-center">

                <h2 class="grow text-2xl">
                    <x-icon class="fa-solid fa-arrow-right" />
                    {!! $position ?? "Unsorted" !!}
                </h2>
                <div class="flex items-center gap-4">
                    <a href="#" class="rounded hidden link link-accent bg-box">
                        <x-icon class="fa-solid fa-copy" />
                    </a>
                    @can('inventory', $entity->child)
                        <a href="{{ route('entities.inventories.create', [$campaign, $entity, 'position' => $position]) }}"
                           class="btn2 btn-default btn-sm"
                           data-toggle="dialog" data-target="inventory-dialog"
                           data-url="{{ route('entities.inventories.create', [$campaign, $entity, 'position' => $position]) }}"
                        >
                            <x-icon class="plus"></x-icon>
                        </a>

                        <a href="#" class="rounded hidden link link-accent bg-box">
                            <x-icon class="fa-solid fa-times" />
                        </a>
                    @endcan

                </div>
            </div>

            <div class="flex gap-4 flex-wrap">
                @foreach ($items as $item)
                    @include('entities.pages.inventory._item')
                @endforeach
            </div>
        </div>
    @endforeach
</div>
