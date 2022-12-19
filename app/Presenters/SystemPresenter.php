<?php

namespace App\Presenters\;

use App\Transformers\SystemTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SystemPresenter.
 *
 * @package namespace App\Presenters\;
 */
class SystemPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SystemTransformer();
    }
}
