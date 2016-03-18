<?php

namespace AirbnbSDK\Response\Review;

use AirbnbSDK\Response\ResponseInterface;
use AirbnbSDK\Response\Review\Metadata\Metadata;
use JMS\Serializer\Annotation as JMS;

class ReviewsResponse implements ResponseInterface
{
    /**
     * @JMS\Type("AirbnbSDK\Response\Review\Metadata\Metadata")
     *
     * @var Metadata $metadata
     */
    private $metadata;

    /**
     * @JMS\Type("array<AirbnbSDK\Response\Review\ReviewResponse>")
     *
     * @var ReviewResponse[] $reviews
     */
    private $reviews;

    /**
     * @return Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param Metadata $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return ReviewResponse[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param ReviewResponse[] $reviews
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }
}
