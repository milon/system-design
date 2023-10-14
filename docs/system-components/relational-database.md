# Relational Database

A relational database is a type of database that organizes data into tables with relationships between them.

### Common Relational Database Operations:

-   Create: Creating tables and defining their fields and relationships
-   Read: Retrieving data from one or more tables using SQL queries
-   Update: Modifying data in one or more tables
-   Delete: Removing data from one or more tables

### Common Relational Database Concepts:

-   Tables: Organizing data into tables with columns and rows
-   Primary Key: A unique identifier for each row in a table
-   Foreign Key: A field in one table that refers to the primary key of another table
-   Index: A data structure that speeds up query performance by providing quick access to data in a table
-   Transaction: A sequence of operations that are treated as a single unit of work that must be completed as a whole or rolled back as a whole in case of failure
-   [ACID](/glossary/acid.md): A set of properties that guarantee reliable processing of database transactions (Atomicity, Consistency, Isolation, Durability)

### Common Relational Database Management Systems (RDBMS):

-   **MySQL**: An open-source RDBMS that is widely used and supports many features and extensions
-   **PostgreSQL**: An open-source RDBMS that supports advanced SQL features and is known for its reliability and robustness
-   **Oracle**: A commercial RDBMS that supports high availability, scalability, and security features
-   **Microsoft SQL Server**: A commercial RDBMS that is popular on Windows systems and supports advanced features like business intelligence and data warehousing.

### Considerations When Using a Relational Database:

-   Data modeling, as the structure and relationships between tables need to be carefully designed to ensure efficient data storage and retrieval
-   [Performance](/glossary/performance.md), as relational databases can suffer from slow query performance with large datasets, and proper indexing and query optimization are crucial for improving performance
-   [Scalability](/glossary/scalability.md), as scaling relational databases can be complex and expensive compared to other database types like NoSQL or NewSQL
-   [Security](/glossary/security.md), as proper security measures need to be in place to prevent unauthorized access and data breaches.