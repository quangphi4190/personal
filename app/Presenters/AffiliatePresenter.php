<?php

namespace App\Presenters\;

use App\Transformers\AffiliateTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AffiliatePresenter.
 *
 * @package namespace App\Presenters\;
 */
class AffiliatePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AffiliateTransformer();
    }
}
