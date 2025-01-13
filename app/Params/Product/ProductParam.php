<?php


namespace App\Params\Product;


class ProductParam
{
    public $name;
    public $price;


    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->price = $data['price'] ?? 0;
    }

    public function setParams(array $data)
    {
        // dd($data);
        $this->name = $data['name'] ?? null;
        $this->price = $data['price'] ?? 0;
        return $this;
    }

    public function toArray(): array
    {
        // dd($this->name);
        return [
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}
