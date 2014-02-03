<?php

namespace Cmf\Bundle\SeoBundleModel;

interface SeoAwareInterface
{

    /**
     * Any content model can handle its seo properties. By implementing
     * this interface a model has to return its class for all the seo properties
     * @todo find a better documentation
     *
     * @return SeoMetadata
     */
    public function getSeoMetadata();
}
