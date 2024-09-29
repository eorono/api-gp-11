<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function index();
    public function getById($id);
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
