<?php

declare(strict_types=1);

namespace PreemStudio\BladeIcons\FontAwesomePro;

use Illuminate\Support\Facades\File;
use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

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
