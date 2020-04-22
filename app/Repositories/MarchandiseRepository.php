<?php
namespace App\Repositories;
use App\Models\Marchandise;

class MarchandiseRepository
{
    protected $marchandise;
    public function __construct(Marchandise $marchandise)
    {
        $this->marchandise = $marchandise;
    }
    public function store($inputs)
    {
        $this->marchandise->create($inputs);
    }
    public function getPaginate($n)
    {
        return $this->marchandise->with('user')
            ->orderBy('created_at','desc')
            ->paginate($n);
    }
    public function getById($id)
    {
        return $this->marchandise->findOrFail($id);
    }
}