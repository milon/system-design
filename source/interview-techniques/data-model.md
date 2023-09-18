---
title: Data Model
extends: _layouts.documentation
section: content
---


When structuring your system design interview answer, it's common to follow up the capacity estimation with defining APIs as the next step. However, I recommend taking a different approach and starting with data modeling. This involves outlining the different entities, attributes, and relationships required to implement the features defined in the requirements engineering phase.

The goal of this step is not to create a fully fleshed-out data schema, as time constraints often make that impossible. Additionally, a meaningful design for large-scale systems discussed in interviews won't rely solely on a single relational database.

Instead, the aim is to get a feel for the system's data and determine which databases would be a good fit. It's also important to consider scalability concerns with SQL databases, as most systems will require some portion of their data to be stored in a relational database due to their strong consistency guarantees.

By focusing on data modeling, you can gain a better understanding of the data required to support the system's functionality. This will help you make informed decisions about which databases to use and how to ensure that the system can scale effectively.

In summary, when preparing for a system design interview, don't rush to define APIs right away. Instead, start by focusing on data modeling to get a better understanding of the system's data needs. This will help you make more informed decisions about which databases to use and how to ensure the system can scale effectively.