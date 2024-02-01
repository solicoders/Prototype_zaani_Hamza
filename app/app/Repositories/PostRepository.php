<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository {
    protected $model;

    public function __construct(Post $model){
        $this->model = $model;
    }


}

