<?php
namespace App\Http\Services\VideoGenerator;

use App\Http\Services\BaseServiceInterface;

interface VideoGeneratorServiceInterface extends BaseServiceInterface
{
    /**
     * Generates video
     */
    public function generateVideo(array $params);
}
