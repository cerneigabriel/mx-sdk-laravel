<?php

namespace Superciety\ElrondSdk\Http\Converters;

use Illuminate\Support\Collection;
use Superciety\ElrondSdk\Api\Accounts\Responses\Nft;

/**
 * find the corresponding typescript representation in our frontend core package:
 * https://github.com/Superciety/pwa-core-library
 */
class NftResponseConverter
{
    public static function single(Nft $nft): array
    {
        return [
            'identifier' => $nft->identifier,
            'collection' => $nft->collection,
            'none' => $nft->nonce,
            'type' => $nft->type,
            'name' => $nft->name,
            'creator' => $nft->creator,
            'ticker' => $nft->ticker,
            'royalties' => $nft->royalties,
            'url' => $nft->url,
            'thumbnailUrl' => $nft->thumbnailUrl,
            'tags' => $nft->getTags(),
        ];
    }

    public static function many(Collection $nfts): array
    {
        return collect($nfts)
            ->map(fn ($nft) => self::single($nft))
            ->toArray();
    }
}