<?php

declare(strict_types=1);

namespace hcf\xchillz\object\profile;

final class Profile {

    /** @var string */
    private $id;

    public function __construct(string $id) {
        $this->id = $id;
    }

    public function getId(): string {
        return $this->id;
    }

}