<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers() {
        try {
            $users = User::all();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Users retrieved successfully",
                    "data" => $users
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Users cant be retrieved successfully",
                "error" => $th->getMessage()
            ],
            500
        );
        }
    }

    public function createUsers(Request $request) {

        try {
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');

            $user->save();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Users created successfully",
                    "data" => $user
                ],
                200
            );
            
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Users cant be created successfully",
                "error" => $th->getMessage()
            ],
            500
        );
        }
    }

    public function updateUsersById(Request $request, $id) {
        try {
            $userId = $id;
            $user = User::find($userId);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');

            $user->save();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Users updated successfully",
                    "data" => $user
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Users cant be updated successfully",
                "error" => $th->getMessage()
            ],
            500
        );
        }
    }

    public function deleteUsersById($id) {
        try {
            $userId = $id;
            $user = User::find($userId);
            $user->delete();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Users deleted successfully",
                    "data" => $user
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
            [
                "success" => false,
                "message" => "Users cant be deleted successfully",
                "error" => $th->getMessage()
            ],
            500
        );
        }
    }
}
