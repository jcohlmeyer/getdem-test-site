<?php

namespace Statamic\Imaging;

use Statamic\API\URL;

class ThumbnailUrlBuilder extends StaticUrlBuilder
{
    /**
     * Build the URL
     *
     * @param \Statamic\Contracts\Assets\Asset|string $item
     * @param array                                   $params
     * @param string|null                             $filename
     * @return string
     */
    public function build($item, $params, $filename = null)
    {
        $this->item = $item;
        $this->params = $params;

        return URL::assemble(
            RESOURCES_ROUTE,
            'thumbs',
            base64_encode($this->generatePath()),
            $item->basename()
        );
    }
}
