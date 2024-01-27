<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Model;

use DomainException;

class Course implements Scorable, Watchable
{
    private $name;
    private $videos;
    private $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    // Feedback validations are for Feedback, not Course. The Course will still be valid, even if the Feedback isn't. 
    public function receiveFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->durationInMinutes() < 3) {
            throw new DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getScore(): int
    {
        return 100;
    }

    public function watch(): void
    {
        foreach ($this->getVideos() as $video) {
            $video->watch();
        }
    }
}