<?php

namespace fakeJsonDataBundle\Client\Entity;
use fakeJsonDataBundle\Entity\EntityInterface;

class Client implements EntityInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @inheritDoc
     */
    public function info()
    {
        return
            [
                'id' => $this->id,
                'name' => $this->name,
                'phone' => $this->phone,
            ];
    }

    /**
     * @param int $id
     * @return Client
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return Client
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $phone
     * @return Client
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }
}
