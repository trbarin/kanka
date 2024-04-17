<?php

namespace App\Http\Controllers\Entity;

use App\Facades\EntityLogger;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateEntityEntry;
use App\Models\Campaign;
use App\Models\Entity;

class EntryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        return view('entities.pages.entry.edit')
            ->with('campaign', $campaign)
            ->with('entity', $entity);
    }

    /**
     * Update the entity's entry
     */
    public function update(UpdateEntityEntry $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        $fields = $request->only('entry');
        $entity->child->update($fields);
        if ($entity->child->wasChanged()) {
            EntityLogger::model($entity->child);
            $entity->touch();
        }

        return redirect()->to($entity->url());
    }
}
