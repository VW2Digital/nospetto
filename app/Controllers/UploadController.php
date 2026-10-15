<?php
declare(strict_types=1);

namespace NoSpetto\Controllers;

use NoSpetto\Request;
use NoSpetto\Upload;

final class UploadController
{
    public function store(Request $request): array
    {
        return ['url' => Upload::image('file')];
    }
}
