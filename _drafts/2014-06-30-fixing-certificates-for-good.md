Q : but what about 51% on bitcoin? Then they could stop me publishing my revocation!

Yes, that is true, if Bitcoin is the only source of stake. However, many other coins are of a similar structure so we can also use their coindays. In this way we can amalgamate PoW security from MANY different chains, combining them in a way that provides resistance to censorship where the cost of attack is the cost of performaing a 51% attack against Bitcoin and Litecoin SIMULTANEOUSLY. Of course, that means we need to keep track of both chains, but that isn't too difficult.


Q : won't a lite node need to keep track of a lot more data than just the headers though?

A : Let's calculate:

In order to validate the PoS the following information is needed:
1. Header: 80 b
2. Merkle branch: ~300 b
3. Tx with hash: 250 b
4. Update itself: 500 b

2, 3, and 4 are required per update, and make each update about 1 kb in size.

Currently 




Does a language based divide mean lesser spoken languages are less secure?

If merged mining is possible in some way then no.

However, nobody knows how to do that yet. At the moment, the answer is maybe, but only a little. It may weaken them to a PoS 51% attack, were more stake is thrown at their network. Because this is on the PoS level, not the PoW level, it is possible to do this regardless of the number of networks used.


