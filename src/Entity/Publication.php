<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $aggregationType = null;

    #[ORM\Column(length: 255)]
    private ?string $publicationName = null;

    #[ORM\Column(length: 255)]
    private ?string $publisher = null;

    #[ORM\Column(length: 255)]
    private ?string $pageRange = null;

    #[ORM\Column(length: 255)]
    private ?string $coverDate = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $abstract = null;

    #[ORM\Column]
    private array $authorNames = [];

    #[ORM\Column]
    private array $authorIds = [];

    #[ORM\Column(length: 255)]
    private ?string $organization = null;


    #[ORM\Column(length: 255, nullable: true)]
private ?string $creator = null;

#[ORM\Column(length: 255, nullable: true)]
private ?string $personnelFullName = null;

    #[ORM\ManyToOne(targetEntity: Personnel::class, inversedBy: 'publications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Personnel $personnel = null;

    #[ORM\Column(length: 255)]
    private ?string $year = null;

    #[ORM\Column(length: 255)]
    private ?string $sourceTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $volume = null;

    #[ORM\Column(length: 255)]
    private ?string $issue = null;

    #[ORM\Column(length: 255)]
    private ?string $artNo = null;

    #[ORM\Column(length: 255)]
    private ?string $pageStart = null;

    #[ORM\Column(length: 255)]
    private ?string $pageEnd = null;

    #[ORM\Column(length: 255)]
    private ?string $pageCount = null;

    #[ORM\Column(length: 255)]
    private ?string $plateforme = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $initialStatus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAggregationType(): ?string
    {
        return $this->aggregationType;
    }

    public function setAggregationType(string $aggregationType): self
    {
        $this->aggregationType = $aggregationType;

        return $this;
    }

    public function getPublicationName(): ?string
    {
        return $this->publicationName;
    }

    public function setPublicationName(string $publicationName): self
    {
        $this->publicationName = $publicationName;

        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getPageRange(): ?string
    {
        return $this->pageRange;
    }

    public function setPageRange(string $pageRange): self
    {
        $this->pageRange = $pageRange;

        return $this;
    }

    public function getCoverDate(): ?string
    {
        return $this->coverDate;
    }

    public function setCoverDate(string $coverDate): self
    {
        $this->coverDate = $coverDate;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getAuthorNames(): array
    {
        return $this->authorNames;
    }

    public function setAuthorNames(array $authorNames): self
    {
        $this->authorNames = $authorNames;

        return $this;
    }

    public function getAuthorIds(): array
    {
        return $this->authorIds;
    }

    public function setAuthorIds(array $authorIds): self
    {
        $this->authorIds = $authorIds;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }



    public function getCreator(): ?string
{
    return $this->creator;
}

public function setCreator(?string $creator): self
{
    $this->creator = $creator;
    return $this;
}

public function getPersonnelFullName(): ?string
{
    return $this->personnelFullName;
}

public function setPersonnelFullName(?string $personnelFullName): self
{
    $this->personnelFullName = $personnelFullName;
    return $this;
}

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getSourceTitle(): ?string
    {
        return $this->sourceTitle;
    }

    public function setSourceTitle(string $sourceTitle): self
    {
        $this->sourceTitle = $sourceTitle;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(string $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getIssue(): ?string
    {
        return $this->issue;
    }

    public function setIssue(string $issue): self
    {
        $this->issue = $issue;

        return $this;
    }

    public function getArtNo(): ?string
    {
        return $this->artNo;
    }

    public function setArtNo(string $artNo): self
    {
        $this->artNo = $artNo;

        return $this;
    }

    public function getPageStart(): ?string
    {
        return $this->pageStart;
    }

    public function setPageStart(string $pageStart): self
    {
        $this->pageStart = $pageStart;

        return $this;
    }

    public function getPageEnd(): ?string
    {
        return $this->pageEnd;
    }

    public function setPageEnd(string $pageEnd): self
    {
        $this->pageEnd = $pageEnd;

        return $this;
    }

    public function getPageCount(): ?string
    {
        return $this->pageCount;
    }

    public function setPageCount(string $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getPlateforme(): ?string
    {
        return $this->plateforme;
    }

    public function setPlateforme(string $plateforme): self
    {
        $this->plateforme = $plateforme;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getInitialStatus(): ?string
    {
        return $this->initialStatus;
    }

    public function setInitialStatus(string $initialStatus): self
    {
        $this->initialStatus = $initialStatus;

        return $this;
    }



}
