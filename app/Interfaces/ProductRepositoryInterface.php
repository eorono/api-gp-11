<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function index();
    public function getById($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}
