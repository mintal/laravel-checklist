<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChecklistResource;
use App\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ChecklistController extends Controller
{

    public function index()
    {
        return ChecklistResource::collection(Checklist::paginate(100));
    }

    public function store(Request $request)
    {
        if ($request->filled('name')) {
            $checklist = new Checklist();
            $checklist->name = $request->name;
            $checklist->save();

            return new ChecklistResource($checklist);
        }

        return json_encode(['message' => 'failed to create list']); //todo Make fancy?
    }

    public function show(Checklist $checklist)
    {
        return new ChecklistResource($checklist);
    }

    public function update(Request $request, Checklist $checklist)
    {
        try {
            $request->validate([
                'name' => ['string'],
                'completed' => ['boolean']
            ]);

            if ($request->filled('name')) {
                $checklist->name = $request->name;
            }

            if ($request->filled('completed')) {
                $checklist->completed = $request->completed;

                foreach ($checklist->items as $item) {
                    $item->completed = $request->completed;
                    $item->save();
                }
            }

            $checklist->save();
        } catch (ValidationException $e) {
            dd($e);
            //todo: handle exception
        }

        return new ChecklistResource($checklist);
    }

    public function destroy(Checklist $checklist)
    {
        try {
            $checklist->delete();
            return json_encode(['message' => 'succesfully deleted checklist']);
        } catch (\Exception $e) {
            return json_encode(['message' => 'failed to delete checklist', 'error' => $e]); //todo Make fancy?
        }
    }
}
