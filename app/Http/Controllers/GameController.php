<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getAllGames()
    {
        return 'GET ALL GAMES';
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
