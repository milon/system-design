---
title: Hashing
extends: _layouts.documentation
section: content
---

Hashing is a process of converting data (often referred to as the "input" or "message") into a fixed-size string of characters, which is typically a hexadecimal number. This fixed-size string is usually a hash value or digest. The primary purpose of hashing is to uniquely represent the input data in a way that is efficient to store and search.

Key characteristics and uses of hashing:

1. **Deterministic**: For the same input, the hashing function will always produce the same hash value. This property is crucial for various applications, including data retrieval and verification.
2. **Fixed Output Length**: Hash functions produce a hash value of a fixed length, regardless of the size or length of the input data.
3. **Efficiency**: Hashing is a fast operation and is often used for data indexing, data retrieval, and data verification.
4. **One-Way Function**: Hashing is a one-way process, meaning it should be computationally infeasible to reverse the hash value to obtain the original input data. This property is crucial for storing passwords securely.
5. **Collision Resistance**: A good hash function minimizes the likelihood of two different inputs producing the same hash value (a collision). Collision resistance is essential for data integrity and security.

Common use cases for hashing include:

1. **Data Integrity**: Hashing is used to verify the integrity of data during transmission. By comparing the hash value of the received data with the original hash value, one can check if the data has been tampered with.
2. **Password Storage**: Hashing is employed to securely store user passwords. Instead of storing plaintext passwords, systems store the hash values of passwords. During login, the system hashes the provided password and compares it to the stored hash.
3. **Data Indexing**: Hashing is used in data structures like hash tables to efficiently index and retrieve data. Hashing allows for constant-time average complexity for data retrieval.
4. **Cryptographic Applications**: Cryptographic hash functions are used in various security applications, including digital signatures, certificates, and blockchain technology.
5. **Caching**: Hashing can be used in caching mechanisms to quickly look up previously computed results based on input parameters.

Commonly used hash functions include SHA-256 (part of the SHA-2 family), MD5, and SHA-1 (although the latter two are considered weak and unsuitable for security-sensitive applications due to vulnerability to collision attacks).

It's important to note that while hashing provides many benefits, the choice of the hash function and its security properties are critical, especially in security-critical applications where data integrity and confidentiality are paramount.