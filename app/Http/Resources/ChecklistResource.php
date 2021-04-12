<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Checklist */
class ChecklistResource extends JsonResource
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
			'items_count' => $this->items_count
		];
	}
}
