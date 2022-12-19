<?php

namespace App\Presenters\;

use App\Transformers\PricingTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PricingPresenter.
 *
 * @package namespace App\Presenters\;
 */
class PricingPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PricingTransformer();
    }
}
