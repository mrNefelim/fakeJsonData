<?php

namespace fakeJsonDataBundle\Order\Entity;

use fakeJsonDataBundle\Entity\EntityInterface;

class Order implements EntityInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $client_id;

    /**
     * @var int
     */
    private $sum;

    /**
     * @var string
     */
    private $date;

    /**
     *
     */
    private $status;

    /**
     * @inheritDoc
     */
    public function info()
    {
        return
            [
                'id' => $this->id,
                'client_id' => $this->client_id,
                'sum' => $this->sum,
                'date' => $this->date,
            ];
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $client_id
     * @return Order
     */
    public function setClientId(string $client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * @param int $sum
     * @return Order
     */
    public function setSum(int $sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * @param string $date
     * @return Order
     */
    public function setDate(string $date)
    {
        $this->date = $date;

        return $this;
    }
}
