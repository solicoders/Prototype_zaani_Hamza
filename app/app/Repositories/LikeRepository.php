<?php
namespace App\Repositories;

use APP\Models\Likes;
use App\Repositories\BaseRepository;

class LikeRepository extends BaseRepository {
    protected $model;

    public function __construct(Likes $model){
        $this->model = $model;
    }

    public function filterLikesByPosts($postId) {
        return $this->model->where('post_id', $postId)->get();
    }
}
    
