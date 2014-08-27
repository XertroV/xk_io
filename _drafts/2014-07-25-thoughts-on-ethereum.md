---
author: Max
date: 2014-07-25
title: Thoughts on Ethereum and the pre-sale
layout: post
---

When I learnt of Ethereum in December 2013 I was pretty excited. I got invited to the dev chat room and had a great time observing (and participating a little). From the get-go I saw it as an opportunity to implement Marketcoin, and Ethereum provided the impetus to alter the design for the better. I began breaking down the exchange design into constituent components and implementing them in the (at that stage) hypothetical scripting language serpent. However, after a month or so I began to identify some potential sticking points and over time became convinced that Ethereum itself has some major drawbacks which eclipsed the turing complete property.

There has been some discussion of how the Ether supply will react to being treated as both 'gas' and money. That is, it is the unit of exchange but also the fuel to run contracts. Therefore some ether will need to be dedicated to running contracts, and some dedicated to actually exchanging. This non-linear system, with the wrong parameters, may implode. With other parameters, perhaps a natural oscillation will occur, resulting in the Ethereum network becoming more or less useful over time. I won't go into further detail, but here's some more reading if you're interested: **LINK TO BURN MODEL OF ETHEREUM**

## Not all Dapps were created equal

Ethereum contains atomic instructions operating on a stack. Each of these instructions are equally weighted in terms of ether required to execute. Modern CPUs have introduced instructions to make cryptographic operations (like taking a SHA256 hash) less computationally expensive. However, the Ethereum network does not provide the same level of flexibility and will require an operation such as SHA256 to be expressed in native byte code. For the sake of the argument let us presume that 10,000 operations are required for a SHA256 operation.

To prove a Bitcoin transaction is valid one needs to provide and verify a merkle branch. This verification process, if performed by an Ethereum contract, could easily take upwards of 100,000 operations with current network conditions.

A decentralised exchange operating within Ethereum, and which pays out ether, requires proof the corresponding transaction on the Bitcoin network has occurred, and thus requires the above operations, so the cost of distributed exchange is at least 100,000 times the base fee. This is thousands of times more expensive than a standard ether transaction.

## Not all cryptocoins were created equal

Furthering the above, some source of authority is required, which can be provided via a Bitcoin header chain. The proof of work algorithm in Bitcoin is a double SHA256 and so requires 20,000 operations or so. However, a network such as Litecoin uses the sCrypt algorithm and requires a number of operations orders of magnitude larger than the relatively small 10,000 for a SHA256 operation.

At some point this becomes prohibitively expensive.

## Competition

A cryptosystem created to perform the functions described above can do so in a philanthropic manner: in a dedicated decentralised market each party is happy to validate the Litecoin chain because it is intrinsic to the *purpose* of the network.

It's nigh impossible for Ethereum to compete against such complex, dedicated networks.

Ethereum can do *anything*, but practically will never be able to do *everything*.

## Where does Ethereum compete?

If complex distributed (highly cryptographic) systems perform orders of magnitude more efficiently on networks outside of Ethereum (and thus it cannot compete), Ethereum's market is far smaller than its capabilities would suggest. Thus Ethereum's main arena of competition is *acting as money*. Regardless of its capabilities, if the main competition is Bitcoin how can Ethereum possibly succeed?

## Closing thoughts

Ethereum is an excellent platform to test distributed applications (at least on the testnet). On the mainnet perhaps some smaller applications can be tested before being migrated to a dedicated network. In the long term the more advanced applications will be unsustainable. It is entirely possible that simple dapps to interact with foreign chains will be possible but these will inevitably required well crafted foreign networks and dapps.

It is even possible that interim networks will exist simply to move value in and out of Ethereum, if it proves to be worthwhile from a monetary perspective (i.e. it is able to out compete Bitcoin).

Ultimately it tries to do too much with too little, and simply due to network dynamics stands little chance of gaining significant market share - at least once dedicated chains replace sets of Ethereum contracts.

## Final questions

**Are you buying any?**

Yes. I'm hedging my bets.
