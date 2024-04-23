<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getAllGames()
    {
        try {
            $games = Game::all();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Games retrieved successfully",
                    "data" => $games
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Games cant be retrieved successfully",
                "error" => $th->getMessage()
            ],
            500
        );
        }
    }

    public function createGames(Request $request) {

        $title = $request->input('title');

        return 'CREATE GAME';
    }

    public function updateGamesById($id) {

        return 'update GAME'.$id;
    }

    public function deleteGamesById($id) {

        return 'delete GAME' .$id;
    }
}
