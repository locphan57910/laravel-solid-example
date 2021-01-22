<?php
namespace App\Http\Traits\VideoGenerator;

trait VideoGeneratorApiTrait
{

    /**
     * Get api version url for video generator
     *
     * @return string
     */
    public function getApiVersionUrl(): string
    {
        return $this->host . '/api/v1';
    }

    /**
     * Get content fetch api url
     *
     * @return string
     */
    public function getContentFetchApiUrl(): string
    {
        return $this->getApiVersionUrl() . '/video/fetch-content';
    }

    /**
     * Get video generator api url
     *
     * @return string
     */
    public function getVideoGeneratorApiUrl(): string
    {
        return $this->getApiVersionUrl() . '/video/generator';
    }
}
