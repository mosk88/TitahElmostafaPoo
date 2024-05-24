<?php

namespace Src\Entity;

use JsonSerializable;

class Moto implements JsonSerializable
{

    private int $id  ;
    private string $brand;
    private string $model;
    private   $type ;
    private  float $price;
    private string $image;

    public function __construct($id , $brand, $model, $type, $price, $image)
    {
        $this->id = $id;
        $this->brand = $brand ;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }
    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'band' => $this->brand,
            'model' => $this->model,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }
    static public function fromArray(array $array): self
    {
        return new self(
            $array['id'],
            $array['brand'],
            $array['model'],
            $array['type'],
            $array['price'],
            $array['image']
        );
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of band
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of band
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
