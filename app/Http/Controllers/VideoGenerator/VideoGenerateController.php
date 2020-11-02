<?php
namespace App\Http\Controllers\VideoGenerator;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoGenerateRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Services\VideoGenerator\VideoGeneratorServiceInterface;

class VideoGenerateController extends Controller
{
    /**
     * Video generator service interface variable
     * @var $videoGeneratorService
     */
    private $videoGeneratorService;
    
    public function __construct(VideoGeneratorServiceInterface $videoGeneratorService)
    {
        $this->videoGeneratorService = $videoGeneratorService;
    }

    /**
     * Ajax function to Generate video
     *
     * @param VideoGenerateRequest $request
     * @return JsonResponse
     */
    public function generateVideo(VideoGenerateRequest $request): JsonResponse
    {
        $response = $this->videoGeneratorService->generateVideo($request->all());

        dd($response);
    }
}
