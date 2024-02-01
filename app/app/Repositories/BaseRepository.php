<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
abstract class BaseRepository {
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function getAll(){
        $this->model->paginate(3);
        return $model;
        
    }
    public function create($data){
        $this->model->create($data);
        return $model;
        
    }

    public function update($data, $id){
        $this->model->find($id)->update($data);
        return $model;
    }
    public function delete($id){
        $this->model->find($id)->delete();
        return $model;
    }
}
