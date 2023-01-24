<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    protected $data;

    public function __construct(Todo $data){
        $this->data = $data;
    }

      /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $data = $this->data->createToDo($request->all());
        return response()->json($data);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request){
        try {

            $data = $this->data->updateData($id, $request->all());

            return response()->json($data);

        } catch (ModelNotFoundException $exception) {

            return response()->json(["msg" => $exception->getMessage()], 404);
        }
    }

      /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus($id, Request $request){
        try {

            $data = $this->data->updateStatus($id, $request->all());

            return response()->json($data);

        } catch (ModelNotFoundException $exception) {

            return response()->json(["msg" => $exception->getMessage()], 404);
        }
    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id){

        $data = $this->data->getData($id);

        if ($data) {
            return response()->json($data);
        }

        return response()->json(["msg" => "Bu data bulunamadı!"], 404);
    }


     /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function gets(){   //Eklenen tüm görevleri listeleme
        $dataAll = $this->data->getDataAll();
        return response()->json($dataAll);
    }


    public function destroy($id){
        try {

            $data = $this->data->destroyData($id);

        } catch (ModelNotFoundException $exception) {

            return response()->json(["msg" => $exception->getMessage()], 404);
        }
    }


    public function search($data){

        return Todo::where('title', 'like', '%' .  $data . '%')->orWhere('status', 'like', '%' .  $data . '%')->get();
    }






}
