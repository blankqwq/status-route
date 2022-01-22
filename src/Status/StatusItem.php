<?php

namespace Blankqwq\StatusRoute\Status;

class StatusItem
{
    private $id;
    private $type;
    private $status;

    private $data;
    private $children = [];
    private $timeout = 0;
    private $timeoutHandler = null;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): \Blankqwq\Mirai\StatusRoute\Status\StatusItem
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): StatusItem
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): StatusItem
    {
        $this->data = $data;

        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): StatusItem
    {
        $this->children = $children;

        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @return StatusItem
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * @return null
     */
    public function getTimeoutHandler()
    {
        return $this->timeoutHandler;
    }

    /**
     * @param null $timeoutHandler
     */
    public function setTimeoutHandler($timeoutHandler): StatusItem
    {
        $this->timeoutHandler = $timeoutHandler;

        return $this;
    }
}