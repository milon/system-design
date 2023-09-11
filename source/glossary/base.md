---
title: BASE
extends: _layouts.documentation
section: content
---

BASE is an alternative approach to database design that prioritizes availability and scalability over consistency.

### BASE Properties:

-   Basically Available: The system should always be available for reads and writes, even under high load or failure conditions.
-   Soft State: The system can tolerate temporary inconsistency or partial failure, as long as it eventually converges to a consistent state.
-   Eventually Consistent: The system will eventually become consistent, but may exhibit temporary inconsistency or stale data in the meantime.

### Benefits of BASE:

-   [Availability](/glossary/availability): BASE properties ensure that the system remains available, even under high load or failure conditions.
-   [Scalability](/glossary/scalability): BASE properties allow for more flexible and scalable database architectures, as they do not require the same level of coordination and synchronization as [ACID](/glossary/acid) systems.
-   [Performance](/glossary/performance): BASE systems can provide better performance than ACID systems, as they do not incur the same overhead and processing requirements.

### Limitations of BASE:

-   [Data Integrity](/glossary/data-integrity): BASE properties can lead to temporary inconsistency or stale data, which may not be acceptable in certain scenarios.
-   [Reliability](/glossary/reliability): BASE systems may not provide the same level of reliability as ACID systems, as they may not guarantee that all transactions are processed correctly.
-  Complexity: BASE systems can be more complex and difficult to manage, as they require careful design and monitoring to ensure that data consistency is eventually achieved.

### BASE vs. ACID:

-   ACID (Atomicity, Consistency, Isolation, Durability) is the traditional approach to database design that prioritizes consistency over availability and scalability.
-   ACID systems guarantee that transactions are processed correctly and maintain data integrity, but can be slower and more complex to manage.
-   BASE systems prioritize availability and scalability, but may sacrifice consistency and data integrity in the short term.

### Considerations When Using BASE:

-   Choosing the appropriate level of consistency based on your needs and requirements
-   Proper data modeling and database design to ensure that eventual consistency is achieved in a reasonable timeframe
-   Balancing the benefits of BASE against the potential tradeoffs in data integrity and reliability.