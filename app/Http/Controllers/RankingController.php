<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function getRanking($movementId)
    {
        $movement = DB::table('movements')->where('id', $movementId)->first();
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
            $previousValue = 0;
            $previousPosition = 1;
            foreach ($ranking as $index => $personalRecords ) {
                if ($personalRecords->value < $previousValue) {
                    $position = $index + 1;
                } else {
                    $position = $previousPosition;
                }
                $personalRecords->position = $position;
                $previousValue = $personalRecords->value;
                $previousPosition = $position;
            }

        return response()->json([
            'movement' => $movement->name,
            'ranking' => $ranking
        ]);
    }
}
