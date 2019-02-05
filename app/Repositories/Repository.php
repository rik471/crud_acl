<?php

    namespace App\Repositories;

    use Illuminate\Database\Eloquent\Model;

    class Repository implements RepositoryInterface
    {
        protected $model;

        public function __construct(Model $model)
        {
            $this->model = $model;
        }

        public function create(array $data)
        {
            return $this->model->create($data);
        }

        public function list()
        {
            return $this->model->all();
        }

        public function update(array $data, $id)
        {
            $update = $this->model->find($id);
            return $this->update($data);
        }

        public function delete($id)
        {
            return $this->model->destroy($id);
        }
    }