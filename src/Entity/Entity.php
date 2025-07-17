<?php

namespace App\Entity;

use DateTimeImmutable;

class Entity
{

    public static function createAndHydrate(array $data): static
    {
        $entity = new static();
        $entity->hydrate($data);

        return $entity;
    }

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {

            $methodName = str_replace(array('-', '_'), ' ', $key); //first_name devient first name
            $methodName = ucwords($methodName); //first name devient First Name
            $methodName = str_replace(' ', '', $methodName); //First Name devient FirstName
            $methodName = "set" . $methodName; //FirstName devient setFirstName

            // équivalent en une ligne : 
            // $methodName = "set" . str_replace(' ', '', ucwords(str_replace(array('-', '_'), ' ', $key)));

            if (method_exists($this, $methodName)) {
                if ($key === 'created_at') {
                    $value = new DateTimeImmutable($value);
                }
                $this->{$methodName}($value);
            }
        }
    }
}
