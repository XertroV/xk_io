---
author: Max Kaye
title: A Draft Solution to Broken Certificate Revocation with Free Name Resolution and Authentication Without a Central Authority
date: 2014-06-30
categories: front
layout: post
---

## Non-technical overview

This proposal aims to provide an accessible and neutral system to wrap around our existing certificate hirarchy that provides near instant acknowledgement of a revoked certificate.

## intro

One of the problems (there were many - link) with namecoin was economic. In 2013 Gavin Andresen [had this to say](http://gavintech.blogspot.com.au/2013/08/the-macro-economics-of-alt-coins.html):

  "I think Namecoin might have been successful if its designers had focused on the market for domain names instead of confusing it with the market for money; Namecoin .bit domains should have been bought and sold using Bitcoins or euros or whatever currency is most convenient."
  
At the end of 2011 I had just given up running a mining pool. That mining pool was [one of the first merged mining pools]() supporting both Namecoin and Bitcoin. At the time Namecoin seemed to have all the flair and revolutionary sexyness that Bitcoin had for me some 6 months earlier. Over time it became obvious that although the cumbersome PoW style blockchain had worked for Bitcoin, it could not serve the need of Namecoin as well. Identity networks seemed not to lend themselves to industrial grade resource-spending-via-computation that Bitcoin could; the monitization method was not there.

## state today

Recently we've seen alternative systems and potential solutions. ((Maybe investigate some)). Often these are combined with other systems, sometimes to the original purpose's detriment, or are attempting to bootstrap a method of monitization from a more flexible token that Bitcoin makes. I do not believe these are the best way because they fail a test of neutrality: they are almost intrinsically tied to their coin-of-origin or are far too burdensome in terms of infrastructure. What is needed is a zero cost solution.

### merged mining

Merged mining is *a* zero cost solution. Bootstraping a blockchain from another; using the original PoW as a raft to keep your own blockchain safe from harm. [The issues of merged mining are for another time], but what's important to note are the following two properties:

* If a merged chain has significantly less hashing power behind it than the entire host chain, then it is remarkably weaker because there are so many resources off-chain that have zero cost to malliciously come on-chian. (Bad in the case of DNS, for example, where traffic might be re-routed, or revoked certificates made appear valid).
* Even in the case of most hashing power being behind the merged chain the *distribution* of hashing power is identical to that of Bitcoin. Ideally this is *not* a property we wish to take with us. (If there is no monetary loss to attacking a merged chain there is no strong incentive not to).

### post merged mining

So it seems there are two areas we must improve upon - at least - when it comes to constructing a decentralised identity system:

* [1] It must be immune to most-of-the-network-not-caring, and not suffer because it is small.
* [2] Power to alter the blockchain should not be held by the same people with that power in Bitcoin-land.
* [3] A third for bonus - not *native* monitization (which goes very well with the first dot point).

At the same time, it must have a number of very important properties:

* [A] Concensus - the one possible solution to the longest-chain-problem must dominate across the network in a reasonable time period (such as 60 minutes). The interpretation of this property in Bitcoin is the liklihood of a double spend occuring

I believe I have that solution.

The problem in [1] can be worked-around in two ways: opt-out (we won't consider this option), or a massive capital injection and rapid growth. These are not satisfactory solutions: one is coersive, and one is expensive. I have not the will, nor the resources for those enterprises.

This is difficult, because we have to expend some resource to keep the network healthy, but if it is not hashing power, we need some other resource compatible with the host network.

The answer lies with Proof of Stake. Usually, PoS systems use an internal token as a means to provide that resource. Unfortunately that self-referential design leads to the nothing-at-stake problem. While there [are]() [suggestions]() [to help]() [alliviate]() that problem, I maintain [my stance] that these systems are likely inherently unstable. In this case, however, the stake we are proving to hold is an *external* resource; Bitcoin coin-days. In this way, most of the network can safely ignore the sparse references in the blockchain to our new identity system, and we gain the advantage of the security behind Bitcoin, albiet in a slightly more indirect way. Additionally, since coin-days are scarce (but renewable!) and there *is* something at stake they are appropriate (perhaps) as a method of securing a blockchain.

The second problem is therefore abaited as the power to manipulate the blockchain is now held by the largest stake-holders in Bitcoin-land. Sometimes these can correlate to those who hold mining power, but not always, and a share in the distribution of Bitcoin is far easier to acquire than a share in the mining arena - thus more accessible.

The third point is now trivially addressed, perhaps satisfying Gavin's requirements put forward ([way up there at the top](#top)).

(Perhaps Mastercoin and Counterparty can take some inspiration from the above *because they can use that to solve their no-SPV problem!*)

### Implementation

Our method of stake deferral (just like merged mining is work deferral) is to include - with a transaction destroying an appropriate CDD (coin-days destroyed) - an `OP_RETURN` output with the hash of our block.

Thus each 'block' requires the following information:

* Bitcoin header (already have)
* Merkle branch to relevant tx
* Tx
* Inputs and block references (for CDD validation)
* Header
* Actual content ('transactions')

It is a little burdonsome, admitedly, but PoS generally is.

CDD can be acquired through a mining like process using `SIGHASH_SINGLE` and `SIGHASH_ANYONECANPAY` provided there are some appropriate safegards around block requirements on the namecoin-2 chain.

ADDITIONALLY QUANTA CAN BE USED AND THATS HEAPS GOOD BUT I DON"T WANT TO EXPLAIN THAT YET SO THIS IS MY EXCUSE (EVEN THOUGH IT WOULD ALSO WORK)

The header should include something like a [Reiner-Tree](https://bitcointalk.org/index.php?topic=88208.0) to allow super-lite-nodes with up to date states. Web servers are expected to maintain a proof their cert is valid.

### Existing trust networks - replacing certificate authorities in a backwards compatible manner

We can just layer our current cert models over the new network, and maybe can even make the new network backwards compatible.

In 2012 symantec claimed to have 800,000 out there [link](http://www.symantec.com/about/news/release/article.jsp?prid=20120419_01) and maybe that put the total number at 10 million (10^7) or lets be generous and say 5\*10^7 (50 million is a lot). Lets presume that doubled each year, and now we have 2*10^8. Many, but we can deal. Each cert is about 1 kb, which is 200 Gb total. Yikes. Luckily, we can build an incremental system so users down the chain of current certificates need to make some effort (basically just to rate-limit) to get their cert on the network. So 0.5% on day 1 which is 1 Gb of state, approximately.

Now, users can claim their own domain names in good time and with that comes the native security (no need for certificate auths) but in the mean time this network can physically mirror the true state of certificates. 

Currently there is a massive problem with certificate revocation. This is because a) there is no one authoritative record everyone has equal reference to, and b) it is cumbersome and slow to query cert auths all the time.

[Stapling]() is an okay solution, but still isn't as instant as we might like. (very recent proof provided by CA that the current cert is valid - maybe less than 8 hours old sort of thing. It's good, in that it's *reasonable* protection, but still allows fake certs and most clients and servers don't ~support~ use it)

A blockchain is the perfect structure to provide two key properties:

* Authoratative *shared* state that *every* internet denizen can refer to and be sure it mirrors that state another denizen observes (blockchain)
* Instant proof of non-recovation by including the proof that the unique certificate for that domain (or one of a set) is currently valid (since the browser has a lite node running connected to both the Bitcoin and Namecoin-2 networks).

In this way we can *permanently* solve the problems of centralised DNS, ~quiet~ private minting of fake certificates by suspicious government agencies, and of ensuring *present* validity.

This system is immune to the criticisms [above](#namecoin-problems) as their is not native method of monetization, and - although nc2 operates over the Bitcoin network - there is no reason besides *convenience* to use that network over another.

