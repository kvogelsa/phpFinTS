<?php

namespace Fhp\Segment;

use Fhp\DataTypes\Ktv;

/**
 * Class HKSPA (SEPA-Kontoverbindung anfordern)
 * Segment type: Geschäftsvorfall
 *
 * @link: http://www.hbci-zka.de/dokumente/spezifikation_deutsch/fintsv3/FinTS_3.0_Messages_Geschaeftsvorfaelle_2015-08-07_final_version.pdf
 * Section: C.10.1.3
 */
class HKSPA extends AbstractSegment
{
    const NAME = 'HKSPA';
    const VERSION = 1;

    /**
     * HKSPA constructor.
     */
    public function __construct(int $segmentNumber, Ktv $ktv = null)
    {
        parent::__construct(
            static::NAME,
            $segmentNumber,
            static::VERSION,
            [$ktv]
        );
    }

    public function getName(): string
    {
        return static::NAME;
    }
}
