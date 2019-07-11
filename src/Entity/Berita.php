<?php
// api/src/Entity/Berita.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Berita.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Berita
{
    /**
     * @var int Id dari berita ini.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Judul dari berita ini.
     *
     * @ORM\Column
     */
    public $judul;

    /**
     * @var string Isi dari berita ini.
     *
     * @ORM\Column(type="text")
     */
    public $isi;

    /**
     * @var string Penulis dari berita ini.
     *
     * @ORM\Column
     */
    public $penulis;

    /**
     * @var \DateTimeInterface Kapan berita ini ditulis.
     *
     * @ORM\Column(type="datetime")
     */
    public $tanggal;

    /**
     * @var Kategori Kategori dari berita ini.
     *
     * @ORM\ManyToOne(targetEntity="Kategori")
     */
    public $kategori;

    public function __construct()
    {
        $this->tanggal = new \DateTime("now");
    }

    public function getTanggal(): ?\DateTime
    {
        return $this->id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}