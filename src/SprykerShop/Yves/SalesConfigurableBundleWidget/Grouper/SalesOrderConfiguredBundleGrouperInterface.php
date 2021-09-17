<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\SalesConfigurableBundleWidget\Grouper;

use Generated\Shared\Transfer\OrderTransfer;

interface SalesOrderConfiguredBundleGrouperInterface
{
    /**
     * @deprecated Use {@link \SprykerShop\Yves\SalesConfigurableBundleWidget\Grouper\SalesOrderConfiguredBundleGrouperInterface::getSalesOrderConfiguredBundlesByItems()} instead.
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     * @param iterable<\Generated\Shared\Transfer\ItemTransfer> $itemTransfers
     *
     * @return array<\Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer>
     */
    public function getSalesOrderConfiguredBundles(OrderTransfer $orderTransfer, iterable $itemTransfers): array;

    /**
     * @param array<\Generated\Shared\Transfer\ItemTransfer> $itemTransfers
     *
     * @return array<\Generated\Shared\Transfer\SalesOrderConfiguredBundleTransfer>
     */
    public function getSalesOrderConfiguredBundlesByItems(array $itemTransfers): array;
}
