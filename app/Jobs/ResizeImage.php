<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Unit;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Queueable;

    private $w, $h, $fileName, $path;

    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $scrPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        Image::load($scrPath)
        ->resize($w, $h )
        ->watermark(
            base_path('public/images/logofinale1.png'),
            width:50,
            height:50,
            paddingX:5,
            paddingY:5,
            paddingUnit:Unit::Percent,
        )
        ->save($destPath);
    }
}
