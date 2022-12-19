<?php

namespace App\Presenters\;

use App\Transformers\CategoryProductTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryProductPresenter.
 *
 * @package namespace App\Presenters\;
 */
class CategoryProductPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryProductTransformer();
    }
}
