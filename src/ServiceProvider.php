<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\BladeIcons\FontAwesomePro;

use BaseCodeOy\BladeIcons\Facades\IconFamilyRegistry;
use BaseCodeOy\BladeIcons\IconFamily;
use BaseCodeOy\Crate\Package\AbstractServiceProvider;
use Illuminate\Support\Facades\File;

final class ServiceProvider extends AbstractServiceProvider
{
    #[\Override()]
    public function packageRegistered(): void
    {
        $directory = resource_path('node_modules/@fortawesome/fontawesome-pro/svgs');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('font-awesome-pro', $directory));
        }
    }
}
