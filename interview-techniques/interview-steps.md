# System Design Interview Steps

For a system design interview you have a design a complex system in 20-25 minutes which never happens in real life scenario. So, you have to be very cautious about time management. My suggestion is a guideline during the interview so we can cover all the aspects of the system design.

The guideline is as follows:

1.  [Requirements Analysis](/interview-techniques/interview-steps/requirement-analysis.md)
    - Functional requirements
        - Core features
        - Support(nice to have) features.
    - Non-functional requirements
        - Read or write heavy?
        - Distributed system or single server?
        - What is more important data consistency or availability?
2.  [Capacity Estimation](/interview-techniques/interview-steps/capacity-estimation.md)
    - Request
        - Daily active user
        - Peak load
    - Bandwidth
        - Read to write ratio
    - Storage
        - Size of each individual file/data chunk
        - Estimate storage for next 5 years
        - Number of replica
3.  [Data Model](/interview-techniques/interview-steps/data-model.md)
    - ER diagram
    - Database schema
    - Choice of database
4.  [API Design](/interview-techniques/interview-steps/api-design.md)
    - Use REST
    - Ask about graphql
    - Ask about gRPC
5.  [System Design](/interview-techniques/interview-steps/system-design.md)
    - System design diagram
6.  [Design Discussion](/interview-techniques/interview-steps/design-discussion.md)
    - Database choice justification

Within the short 20-25 minutes all the above mentioned points are impossible to cover. So, it's better to get clarify the requirements first and then check with your interviewer which points to cover. If you are not sure about the requirements, ask your interviewer. It's better to ask than to assume. Some interviewer likes capacity estimation and some just skip this part and ask you directly to design the system. So, it's better to ask your interviewer about the requirements and then proceed accordingly.

One of the most important decison you need to make is about your storage solution choice and justify your choice. You can choose any database you want but you need to justify your choice. For example, if you choose MySQL then you need to justify why you choose MySQL over MongoDB or Cassandra. You can also choose multiple databases for different use cases. For example, you can choose MySQL for relational data and MongoDB for non-relational data. You can also choose a NoSQL database for caching. It's up to you. But you need to justify your choice. You can check the [Database Choices](/interview-techniques/database-choices.md) for more details.
