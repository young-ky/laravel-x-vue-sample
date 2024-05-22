<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PlantedTree;
use App\Models\TreeType;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getTreeType() {
        return TreeType::all();
    }

    public function addTree(Request $request) {
        try {
            $user = DB::table('users')->where('name', $request->name)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $request->name
                ]);
            }
            PlantedTree::create([
                'uid' => $user->id,
                'tree_id' => intval($request->tree_id),
                'total' => intval($request->total)
            ]);
        }
        catch (Exception $e) {
            throw $e;
        }
    }

    public function findUser() {
        return User::all();
    }

    public function userTree($id) {
        $rawData = DB::select("
            SELECT lps.uid, lps.tree_id, lpt.tree_name, SUM(lps.total) AS totalOwned
            FROM laravel_pt.planted_trees AS lps
            JOIN laravel_pt.tree_types AS lpt
            ON lps.tree_id = lpt.id
            WHERE lps.uid = :uid
            GROUP BY lps.uid, lps.tree_id, lpt.tree_name
        ", ["uid" => $id]);

        $this->userTrees = array_map(function ($data) {
            return (array) $data;
        }, $rawData);

        return $rawData;
    }

    public function removeTree(Request $request) {
        try {
            $rawData = DB::select("
                SELECT id, total
                FROM laravel_pt.planted_trees
                WHERE uid = :uid
                AND tree_id = :tree_id
                ORDER BY created_at
            ", ["uid" => $request->uid, "tree_id" => $request->treeId]);

            $deleteRequest = $request->total;

            if ($request->total > 0 && $request->total <= $request->owned) {
                foreach ($rawData as $data) {
                    if ($deleteRequest < $data->total) {
                        $updatedTree = $data->total - $deleteRequest;
                        DB::table('planted_trees')->where('id', $data->id)->update(['total' => $updatedTree]);
                        break;
                    }
                    else {
                        $deleteRequest -= $data->total;
                        DB::table('planted_trees')->where('id', $data->id)->delete();
                    }
                }
            }
        }
        catch (Exception $e) {
            throw $e;
        }
    }
}
