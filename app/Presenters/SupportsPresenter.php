<?php

namespace App\Presenters\;

use App\Transformers\SupportsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SupportsPresenter.
 *
 * @package namespace App\Presenters\;
 */
class SupportsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SupportsTransformer();
    }
}
