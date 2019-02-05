<?php

    namespace App\Repositories;

    interface RepositoryInterface
    {

        public function create(array $data);

        public function list();

        public function update(array $data, $id);

        public function delete($id);
    }