<?php

namespace App\Presenters\;

use App\Transformers\CommunityTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CommunityPresenter.
 *
 * @package namespace App\Presenters\;
 */
class CommunityPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CommunityTransformer();
    }
}
