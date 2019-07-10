<?php
// api/src/Entity/Kategori.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Kategori berita
 *
 * @ApiResource
 * @ORM\Entity
 */
class Kategori
{
    /**
     * @var int Id dari kategori ini.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Nama dari kategori ini.
     *
     * @ORM\Column
     */
    public $nama;

    /**
     * @var Berita[] Available reviews for this book.
     *
     * @ORM\OneToMany(targetEntity="Berita", mappedBy="kategori", cascade={"persist", "remove"})
     */
    public $berita;

    public function getId(): ?int
    {
        return $this->id;
    }
}