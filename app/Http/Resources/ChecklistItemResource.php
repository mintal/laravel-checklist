<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\ChecklistItem */
class ChecklistItemResource extends JsonResource
{
	/**
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'completed' => $this->completed,
            'parent_id' => $this->checklist_id
		];
	}
}
