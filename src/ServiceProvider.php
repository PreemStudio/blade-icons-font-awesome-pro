<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\FontAwesomePro;

use Illuminate\Support\Facades\File;
use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('node_modules/@fortawesome/fontawesome-pro/svgs');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('font-awesome-pro', $directory));
        }
    }
}
