<?php

namespace App\Services;

use App\Entity\Utilisateur;
use App\Form\SearchType;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Filesystem\Filesystem;

class qrcodeService
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function qrcode($query)
    {
        $writer = new PngWriter();

        $options = [
            'encoding' => new Encoding('UTF-8'),
            'error_correction_level' => new ErrorCorrectionLevelHigh(),
            'size' => 400,
            'margin' => 10,
            'label_text' => 'Scannez le code !',
            'label_alignment' => new LabelAlignmentCenter(),
            'label_margin' => new Margin(15, 5, 5, 5),
            'background_color' => new Color(221, 158, 3),
        ];

        // set qrcode
        $result = $this->builder
        ->data($query)
        ->build($writer,$options);
        ;

        $namePng = uniqid('', false) . '.png';

        // create directory if it doesn't exist
        $filesystem = new Filesystem();
        $directory = 'public/images/QR-code';
        if (!$filesystem->exists($directory)) {
            $filesystem->mkdir($directory);
        }

        // save img png
        $result->saveToFile($directory.'/'.$namePng);

        return $result->getDataUri();
}
}