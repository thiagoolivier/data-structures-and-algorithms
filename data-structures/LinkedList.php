<?php

/**
 * Represents a node in a linked list.
 */
class Node 
{
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

/**
 * Represents a singly linked list.
 */
class LinkedList 
{
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function attach($data) {
        $newNode = new Node($data);

        if ($this->head == null) {
            $this->head = $newNode;
            return;
        }

        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    // Append to the end of the list.
    public function append($data) {
        $newNode = new Node($data);

        if ($this->head == null) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next != null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }

    // Display data inside each node.
    public function showAll() {
        $current = $this->head;

        while ($current !== null) {
            echo "$current->data ";
            $current = $current->next;
        }
        echo PHP_EOL;
    }
}

$list = new LinkedList();
$list->append(2);
$list->append(3);
$list->append(4);
$list->attach(1);
$list->showAll();