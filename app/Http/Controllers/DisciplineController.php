<?php

namespace App\Http\Controllers;

use App\Models\Discipline\Biking;
use App\Models\Discipline\Burpees;
use App\Models\Discipline\DoubleUnders;
use App\Models\Discipline\HandstandWalk;
use App\Models\Discipline\Rowing;
use App\Models\Discipline\SkiErg;
use App\Models\Discipline\Swimming;
use App\Models\Discipline\Walking;
use Illuminate\Support\Facades\Auth;

class DisciplineController extends Controller
{
    public function store(string $type)
    {
        $model = 'App\\Models\\Discipline\\' . ucfirst($type);

        if (! $this->isAllowedType($model)){
            abort(401);
        }

        $discipline = $model::make([
            'user_id' => Auth::user()->id,
        ]);

        $validatedData = request()->validateWithBag($model, $discipline->getValidationRules());

        $discipline->fill($validatedData);
        $discipline->save();

        return redirect()->to(route('dashboard'))->with($type, $discipline);
    }

    private function isAllowedType($type)
    {
        return in_array(
            $type,
            [
                Biking::class,
                Burpees::class,
                HandstandWalk::class,
                DoubleUnders::class,
                Rowing::class,
                SkiErg::class,
                Swimming::class,
                Walking::class,
            ]
        );
    }
}
