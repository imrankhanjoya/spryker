<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MerchantProductOfferDataImport\Business\Model\Step;

use Pyz\Zed\MerchantProductOfferDataImport\Business\Model\DataSet\CombinedMerchantProductOfferDataSetInterface;
use Spryker\Zed\MerchantProductOfferDataImport\Business\Model\Step\ApprovalStatusValidationStep;

class CombinedApprovalStatusValidationStep extends ApprovalStatusValidationStep
{
    /**
     * @var string
     */
    protected const APPROVAL_STATUS = CombinedMerchantProductOfferDataSetInterface::APPROVAL_STATUS;
}
