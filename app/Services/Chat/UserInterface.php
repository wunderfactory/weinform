<?php namespace App\Services\Chat;

use Ratchet\ConnectionInterface;

interface UserInterface
{
    public function getSocket();
    public function setSocket(ConnectionInterface $socket);
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
}