<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Todo extends Model
{
    use HasFactory;

    protected $table = "todo";
    /**
     * @param  array  $attributes
     * @return Todo
     */
    public function createToDo(array $attributes){

        $data = new self();

        $data->title = $attributes["title"];
        $data->save();

        return $data;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getData(int $id){
        $data = $this->where('id', $id)->first();
        return $data;
    }

    public function getDataAll(){
        $dataAll = $this::all();
        return $dataAll;
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function updateData(int $id, array $attributes){

        $data = $this->getData($id);

        if($data == null){
            throw new ModelNotFoundException("Data bulunamadı!");
        }

        $data->title = $attributes["title"];
        $data->save();

        return $data;
    }


    public function updateStatus(int $id, array $attributes){

        $data = $this->getData($id);

        if($data == null){
            throw new ModelNotFoundException("Data bulunamadı!");
        }

        $data->status = 'Tamamlandı';
        $data->save();

        return $data;
    }


    /**
     * @param int $id
     * @return mixed
     */
    public function destroyData(int $id){

       $data = $this->getData($id);

       if($data == null){
        throw new ModelNotFoundException("Bu data bulunamadı!");
       }
       return $data->delete();
    }


}
