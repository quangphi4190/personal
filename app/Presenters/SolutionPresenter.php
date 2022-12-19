<?php

namespace App\Presenters\;

use App\Transformers\SolutionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SolutionPresenter.
 *
 * @package namespace App\Presenters\;
 */
class SolutionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SolutionTransformer();
    }
}
