<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function getRanking($movementId)
    {
        $movement = DB::table('movements')->where('id', operator: $movementId)->first();
        if (!$movement) {
            return response()->json(['error' => 'Movimento não existe!'], 404);
        }

        $ranking = DB::table('personal_records')
            ->join('users', 'personal_records.user_id', '=', 'users.id')
            ->select('users.name', 'personal_records.value', 'personal_records.date')
            ->where('personal_records.movement_id', $movementId)
            ->orderBy('personal_records.value', 'desc')
            ->get();

        $position = 1;
        $previousValue = null;
        foreach ($ranking as $record) {
            if ($previousValue !== null && $record->value < $previousValue) {
                $position++;
            }
            $record->position = $position;
            $previousValue = $record->value;
        }

        return response()->json([
            'movement' => $movement->name,
            'ranking' => $ranking
        ]);
    }
}
