<?php

declare(strict_types=1);

namespace PreemStudio\BladeFontAwesomePro;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\BladeIcons\IconFamilyStyle;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            new IconFamily('font-awesome-pro', [
                new IconFamilyStyle('brands', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/brands')),
                new IconFamilyStyle('duotone', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/duotone')),
                new IconFamilyStyle('light', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/light')),
                new IconFamilyStyle('regular', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/regular')),
                new IconFamilyStyle('sharp-light', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/sharp-light')),
                new IconFamilyStyle('sharp-regular', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/sharp-regular')),
                new IconFamilyStyle('sharp-solid', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/sharp-solid')),
                new IconFamilyStyle('solid', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/solid')),
                new IconFamilyStyle('thin', base_path('node_modules/@fortawesome/fontawesome-pro/svgs/thin')),
            ]),
        );
    }
}
