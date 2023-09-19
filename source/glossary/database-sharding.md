---
title: Database Sharding
extends: _layouts.documentation
section: content
---

Database sharding is a technique that involves splitting a database into multiple parts, or shards. Each shard is a separate database that stores a subset of the total data. By distributing the data across multiple shards, the overall database can handle a larger volume of requests and support more users.

### Sharding Strategies

There are several strategies for sharding a database, and each strategy has its own tradeoffs. For example, a database can be sharded based on the user ID, the user's geographic location, or the type of data being stored. Let's explore each of these strategies in more detail.

#### Sharding by User ID

One common strategy is to shard the database based on the user ID. This strategy involves assigning each user a unique ID, then using that ID to determine which shard should store the user's data. For example, if a database has four shards, then users with IDs 1-250,000 can be stored in the first shard, users with IDs 250,001-500,000 can be stored in the second shard, and so on.

This strategy is relatively simple to implement, as it only requires a single lookup to determine which shard should store a given user's data. However, it can lead to uneven distribution of data across shards. For instance, if a database has four shards, but only 10% of users have IDs in the range 1-250,000, then the first shard will be much larger than the other three shards.

#### Sharding by Geographic Location

Another strategy is to shard the database based on the user's geographic location. This strategy involves assigning each user a geographic location, then using that location to determine which shard should store the user's data. For example, if a database has four shards, then users in North America can be stored in the first shard, users in Europe can be stored in the second shard, and so on.

This strategy can lead to more even distribution of data across shards, as users are typically distributed evenly across geographic regions. However, it requires multiple lookups to determine which shard should store a given user's data. For instance, if a user is located in North America, then the database must first determine which shard stores North American users, then query that shard to retrieve the user's data.

#### Sharding by Data Type

A third strategy is to shard the database based on the type of data being stored. This strategy involves assigning each type of data a unique ID, then using that ID to determine which shard should store the data. For example, if a database has four shards, then user data can be stored in the first shard, product data can be stored in the second shard, and so on.

This strategy can lead to more even distribution of data across shards, as each shard stores a different type of data. However, it requires multiple lookups to determine which shard should store a given type of data. For instance, if a user wants to retrieve their data, then the database must first determine which shard stores user data, then query that shard to retrieve the data.

### Sharding in Practice

In practice, most databases use a combination of these strategies to shard their data. For example, a database might shard its data based on the user's geographic location, then further shard the data based on the type of data being stored. This approach can lead to more even distribution of data across shards, while still allowing for efficient lookups.

### In the Interview Context

Database sharding is a common topic in system design interviews, as it's a technique that can be used to scale a database to support more users. By asking you to shard a database, interviewers can assess your ability to think critically and make reasonable assumptions.
