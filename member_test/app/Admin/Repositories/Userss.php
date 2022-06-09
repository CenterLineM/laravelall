<?php

namespace App\Admin\Repositories;

use App\Models\Usersss as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Userss extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
