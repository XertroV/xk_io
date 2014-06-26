---
author: max
categories: technical
date: 2014-06-25
layout: post
title: Another Intro to Marketcoin (ongoing)
---

The analogy of Bitcoin to old school payment providers (like banks / visa / etc) has been widely used and has at least some truth. If we carry the analogy, though, what should we be using instead of old school exchanges?

`I really didn't like how the last one was worded, so I'm sort of re-writing it a bit here. - max 25/6`

Most of the recent writings on distributed exchange have focused on interaction with fiat currency which is not of concern here, just as it wasn't a concern to Satoshi [cite bitcoin paper].

Marketcoin is designed to facilitate pseudo-trustless agreeable trade across blockchains using a (novel?) neutral market to decide prices, and a blockchain to function as the escrow agent. It is a crypto-currency market, and can be applied as a general smart property exchange in future. A new coin will be created as a way to represent the value uniformly across a myriad of different systems. There will be no pre-mine or pre-sale, as this could corrupt the experiment.

The network has the potential to be compatible with all blockchain models, and efficiently compatible with any PoW based blockchain. PoS blockchains require full validation (no SPV). Mastercoin and Counterparty require full Bitcoin validation (yikes) - they are suggested to build similar markets into their own currencies for Bitcoin, since they have to fully validate anyway. They can then trade out through Bitcoin.

Marketcoin will eventually be able to connect into any other smart property network without hard forks through a chain-genesis style operation: the vision is to expand from one chain to many chains, with no discernable central chain. Side chains come with a few issues that effect their practicality. We've divised a merged mining technique we believe holds some protection against these attacks by distributing the importance of where value is located. We find this system of merged mining a plausable candidate to host the market-web, and any other candidate projects.

## Previous works

### Cross Chain Trade

There's an algorithm that's been iterated over [explained in the wiki]() referred to here as a cross chain trade. Its become far more practical since the first incarnation was suggested, but is still very cumbersome to the user - though the txs are technically possible currently (just non-standard).

Briefly: 

* B and S meet and agree on each side of the exchange. 
* A secret is chosen by S and hashed to produce X.
* S calculates a transaction sending coins to this sort of script to make TX_S_ESCROW: 
```
    IF
      2 PUB_B PUB_S 2 CHECKMULTISIG
    ELSE
      HASH <X> EQUALVERIFY PUB_B CHECKSIG
    ENDIF
  ... or something.
```
* S signs `TX_S_ESCROW` and calculates `TXID_S_ESCROW`
* S requests B signs a return transaction with a lock time 48 hours in the future, spending the output from `TX_S_ESCROW` using the TXID, this tx is `TX_S_RETURN`, S also signs it.
* Once S has `TX_S_RETURN` she may broadcast `TX_S_ESCROW`.
* B has 48 hours to spend this transaction before S can redeem it using `TX_S_RETURN`.
* B needs X to claim TX_S_ESCROW.
* B produces a transaction for the agreed amount (`TX_B_ESCROW`) like this
    ```
    IF
      2 PUB_B PUB_S 2 CHECKMULTISIG
    ELSE
      HASH <X> EQUALVERIFY PUB_S CHECKSIG
    ENDIF
    ```
* B requests S sign `TX_B_RETURN` with a lock time of only 24 hours and then releases `TX_B_ESCROW`.
* To redeem `TX_B_ESCROW` S must reveal the chosen secret, and in the process allows B to claim `TX_S_ESCROW`.

This process is curious, but a dated and impractical (needing new templates and all that).

All `TX_B_*` txs are on one network, and the `TX_S_*` txs are on the other. The blockchains have no further relationship.

### P2PTradeX

Sergio Demian Lerner [wrote about P2PTradeX in July 2012](https://bitcointalk.org/index.php?topic=91843.0).

It does not deal with a market, just the exchange itself.

Briefly:

* B and S arrive on a price through whatever means.
* B commits their payment to S in `TX_B_COMMIT`. This transaction functions similarly to the interaction in the cross chain trade. For some period of time it may be redeemed by S, and beyond that it is returned to B
* S sends coins to B in `TX_S_SEND`.
* S provides a proof to redeem `TX_B_COMMIT`.
    * This proof includes a short chain of relevant headers from the foreign chain from a defined starting point (in `TX_B_COMMIT`) and the an upper limit for the length of chain before `TX_S_SEND` appears.

The following observations were made:

* Only a merkle branch and the transaction need to be provided in addition to the headers.
* B or S could publish the proof, but S is the interested party in this case.
* Everything is transparent.
* More space required might mean much higher fees - incentivising miners.
* No tokens are lost if the trade fails.

Lerner's protocol will no doubt works but can be heavily optimised. However, the core idea is common between our two proposals: prove payment through a merkle branch.

**Pros:**

* 3 step process
* B (above) only sends one tx
* No communication required during the actual exchange

**Neutral:**

* OP_CODE based txs

**Cons:**

* Bad efficiency if high volume
* [Possible PoW attack in proof mechanism](http://bitslog.wordpress.com/2013/12/11/p2ptradex-revisted/)
* No market

### Mastercoin and Counterparty

**NOTE:** I haven't used this so don't take my word for it, this is just what I can find.

* Mastercoin/Counterparty provides an orderbook where MSC is offered for sale by S.
* B claims the order from S
* B sends BTC to S to finalise the payment

**Pros:**

* 3 step
* Concensus on foreign chain (Bitcoin)
* No extra validation because you're already fully validating Bitcoin anyway

**Cons:**

* Only works with Bitcoin and Mastercoin/Counterparty
* Have to fully validate Bitcoin chain
* No market

### Mastercoin, Counterparty, and NXT

These are [fiat exchanges](https://xk.io/2013/12/factum-exchange.html) and so I'm not that interested.

The gist is you create arbitrary tokens with certain rules meant to represent something, and they can be traded. I think manually and without a market, but this would be nice if it were confirmed.

## A marketcoin market

The market-chain will include a representation of the Bitcoin chain in header form. This is ~5 Mb a year so it's hard to see anyone complaining.

* B and S place orders to buy market coins and sell market coins
* These two orders are matched and a trade is aranged
* The sell order belonging to S is now in escrow and cannot be canceled or retrieved for 24 hours.
* B makes payment on the foreign chain and provides this payment along with an SPV proof to the market-chain after it has been confirmed
* Satisfied, the market-chain releases the escrowed coins to B

**Pros:**

* Has a market
* Concensus on foreign chain
* Forseeably compatible with all other chains
* 4 steps includeing placing orders and price finding

**Cons:**

* Market coins are the base of all currency pairs
    * so no direct BTC-LTC trades
* Potentially slow

#### more detailed about the grachten

(the market-web; think side-chains, but a web, not spoke-like in interaction, and the mining is structured horizontally between chains, instead of Bitcoin acting as a primary host chain. This is why we will call them parallel chains, instead of side chains from now on. Side chains particularly refer to old school merged mining). 

In this way we hope to foster a sustainable host blockchain which allows other projects to join at will and make use of existing hashing power. A side effect is that the mean block confirmation time will decrease as the chain gains value. This is because including a hash in your merged-PoW is costly. This presents a value proposition that causes a competetive environment in the super-chain; forcing out dead chains and taking in fresh ones. We hope this provides a spirit of innovation in the altcoin space and produces strange new crypto-systems that fight it out in a scramble for hashes.

It also offers protection against releasing a hidden chain (generated in private) unless the entire network is 51% attacked.

#### other stuff

Marketcoin can potentially offer a trustless currency-pair feed.
