---
layout: post
author: Max
date: 2014-07-24
title: Thoughts on Merged Mining
---

# Thoughts on Merged Mining

So I was talking to some shibies over in /r/dogecoin and on IRC yesterday and we came up with [a proposal of sorts](http://www.reddit.com/r/dogecoin/comments/2b9c6m/one_small_step_for_doge_addm3plz_had_a_great_idea/) for a sort of neutral merged mining scheme. The idea is to use a traditional header structure with as many fields zeroed as possible, with the merkle root replaced with the root of a Patricia Merkle Tree. This is probably the most compact merged mining design that remains compatible with existing ASICs.

After a bit more thinking it dawned on me that old school merged mining doesn't actually rely on any particular central chain in any case. Namecoin could be merged mined with any SHA256 coin or with none at all (just zero what needs to be zeroed). This means that if Dogecoin were to hard fork to allow merged mining it isn't actually dependant on Litecoin per se, but could be merged with theoretically anything.

So, there are therefore three logical ways to embrace merged mining:

### 1) Old school merged mining. 

The hierarchy of dependence is thus:

```
AuxPoW_Header
    Merkle Tree
        Coinbase
            Scriptsig
                Merkle Tree
                    Local_Header
```

Validation depends on `HASH(AuxPoW_Header) < Local_Header['target']`

It's worth noting that this does compromise the security of the lesser network somewhat. The case in point is one only requires ~30% of Bitcoin's hash rate to compromise Namecoin.

### 2) Require compatibility with current ASICs. 

This means we require a similar `AuxPoW_Header` structure but since it needs not be compatible with any existing network we've freedom after that. This is what was proposed by xtphr and I in the /r/dogecoin thread linked above.

Hierarchy:

```
AuxPoW_Header
    Patricia_Merkle_Tree
        Genesis_Hash: Local_Header (as key-value pair)
```

The advantage being far smaller proofs to validate the PoW on Local_Header.

### 3) Well designed from the start.

In this case the simplest construction is as in 2) with a different header structure, such as: `[PMT_root, 64bit nonce]`. That said, you only save 40 bytes.

### Some other observations

These did not occur to me to begin with, and I think they're less intuitive.

#### There is no child-parent relationship

A merged chain and what it is mined with are not in a binding relationship. Obviously (using Bitcoin and Namecoin as examples) Bitcoin does not know of, nor care about, merged mining. Namecoin, although predominantly mined through Bitcoin blocks, has no requirement specifying the Bitcoin network as the host. It doesn't care about which block it is, nor whether it is valid its local network, all that matters is a structural relationship leading to a deterministic location that stores the hash of the Namecoin header.

The `AuxPoW_Header`can happily have all fields set to zero (besides the merkle_root) provided the PoW is valid against the local header's target.

#### Bitcoin could fork to merged mining and nothing would change

Let's presume we have two Namecoin-esq networks, and no Bitcoin-esq network. Using the above property both could be 'merge mined' without any 'host' network. This is consistent with the 'no child-parent relationship' property.

